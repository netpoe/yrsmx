@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/checkout/show.css" rel="stylesheet">
@endpush

@push('head-scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
  <script src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
@endpush

@section('sub-header')
<header class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 left">
        <nav>
          <a href="{{ route('front.shipping.show') }}"><i class="icon-chevron-left"></i> Regresar</a>
        </nav>
      </div>
      <div class="col-sm-4 center"></div>
      <div class="col-sm-4 right">
      </div>
    </div>
  </div>
</header>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <div class="card">
        <small class="card-block-title">Métodos de pago</small>
        <div class="card-block">
          <h2>Tarjeta de crédito o débito</h2>
          <form action="{{ route('front.checkout.process-payment') }}" method="POST" id="payment-form">
            {{ csrf_field() }}
            <input type="hidden" name="token_id" id="token_id">
            <input type="hidden" name="use_card_points" id="use_card_points" value="false">
            <fieldset class="form-group">
              <label>Nombre del titular</label>
              <input type="text"
                class="form-control form-control-lg"
                name="holder_name"
                placeholder="Como aparece en la tarjeta"
                autocomplete="off"
                data-openpay-card="holder_name">
            </fieldset>
            <div class="row">
              <div class="col-sm-8">
                <fieldset class="form-group">
                  <label>Número de tarjeta</label>
                  <input type="text"
                    class="form-control form-control-lg"
                    name="card_number"
                    autocomplete="off"
                    data-openpay-card="card_number">
                </fieldset>
              </div>
              <div class="col-sm-4">
                <fieldset class="form-group">
                  <label>Código de seguridad</label>
                  <input type="text"
                    class="form-control form-control-lg"
                    placeholder="3 dígitos"
                    name="cvv2"
                    autocomplete="off"
                    data-openpay-card="cvv2">
                </fieldset>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <fieldset class="form-group">
                  <label>Mes de expiración</label>
                  <input type="text"
                    class="form-control form-control-lg"
                    name="expiration_month"
                    placeholder="Mes"
                    data-openpay-card="expiration_month">
                </fieldset>
              </div>
              <div class="col-sm-6">
                <fieldset class="form-group">
                  <label>Año de expiración</label>
                  <input type="text"
                    class="form-control form-control-lg"
                    name="expiration_year"
                    placeholder="Año"
                    data-openpay-card="expiration_year">
                </fieldset>
              </div>
            </div>
            <div class="openpay">
              <div class="logo"></div>
              <p>Transacciones realizadas vía:</p>
            </div>
            <div class="shield">
              <p>Tus pagos se realizan de forma segura con encriptación de 256 bits</p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="card">
        <small class="card-block-title">Resumen de compra</small>
        <div class="card-block">
          <div class="shipping-summary-block">
            <h2>Dirección de envío:</h2>
            <p class="user-address">{{ $userAddress->toString() }}</p>
            <a href="{{ route('front.shipping.show') }}" class="small">Cambiar dirección de envío</a>
          </div>
          <div class="products-summary-block">
            <h2>Productos</h2>
            <a href="{{ route('front.user.latest-outfit') }}" class="small">Seleccionar más productos</a>
            <div class="cart-products-list">
              @foreach ($productsInCart as $product)
              <article class="product">
                <div class="img-wrapper">
                  <div style="background-image: url({{ $product->files->first()->file_src }})"></div>
                </div>
                <div class="info">
                  <div>
                    <p class="name"><strong>{{ $product->name }}</strong></p>
                    <p class="price">Precio: {{ $product->price()->toCurrency() }}</p>
                    @if ($product->discount()->toPercentageString())
                    <p class="discount">Descuento: {{ $product->discount()->toPercentageString() }}</p>
                    @endif
                  </div>
                </div>
                <div class="actions">
                  <div>
                    <div class="remove-item">
                      <form action="{{ route('front.cart.remove-product') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="productId" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-remove-item"><i class="icon-cross-circle"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </article>
              @endforeach
            </div>
          </div>
          <div class="cart-checkout-block">
            <div class="center">
              <div class="row">
                <div class="col-sm-6">
                  <h2 class="title">Subtotal:</h2>
                </div>
                <div class="col-sm-6">
                  <h2 class="amount">{{ $cart->getSubtotal()->toCurrency() }}</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h2 class="title">Descuento:</h2>
                </div>
                <div class="col-sm-6">
                  <h2 class="amount">{{ $cart->getDiscount()->toCurrency() }}</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h2 class="title">Envío *:</h2>
                </div>
                <div class="col-sm-6">
                  <h2 class="amount">{{ $cart->getShipping()->toCurrency() }}</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <h2 class="title">Total:</h2>
                </div>
                <div class="col-sm-6">
                  <h2 class="amount">{{ $cart->getTotalPlusTaxes()->toCurrency() }}</h2>
                </div>
              </div>
            </div>
            <div class="bottom">
              <nav>
                <button class="btn btn-primary btn-lg btn-block" id="pay-button">Pagar <i class="icon-chevron-right"></i></button>
              </nav>
            </div>
            <p class="small">Envío e IVA del 16% incluído</p>
            <p class="small">* El envío es realizado por Estafeta Terrestre, de 2 a 3 días hábiles</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('footer-scripts')
  <script type="text/javascript">
    var errorCodes = {
      2001: {
        message: 'La cuenta de banco con esta CLABE ya se encuentra registrada en el cliente',
        field: ''
      },
      2002: {
        message: 'La tarjeta con este número ya se encuentra registrada en el cliente.',
        field: ''
      },
      2003: {
        message: 'El cliente con este identificador externo (External ID) ya existe.',
        field: ''
      },
      2004: {
        message: 'El dígito verificador del número de tarjeta es inválido de acuerdo al algoritmo Luhn.',
        field: ''
      },
      2005: {
        message: 'La fecha de expiración de la tarjeta es anterior a la fecha actual.',
        field: ''
      },
      2006: {
        message: 'El código de seguridad de la tarjeta (CVV2) no fue proporcionado.',
        field: ''
      },
      2007: {
        message: 'El número de tarjeta es de prueba, solamente puede usarse en Sandbox.',
        field: ''
      },
      2008: {
        message: 'La tarjeta no es valida para puntos Santander.',
        field: ''
      },
      2009: {
        message: 'El código de seguridad de la tarjeta (CVV2) es inválido.',
        field: ''
      },
    };
    $(document).ready(function() {
      OpenPay.setId('mxakvrzaeqjftty1f7zt');
      OpenPay.setApiKey('pk_2ea98792ab064befb36ae18ad7ac60bd');
      OpenPay.setSandboxMode(true);
      var deviceSessionId = OpenPay.deviceData.setup('payment-form', 'deviceIdHiddenFieldName');

      $('#pay-button').on('click', function(event) {
        event.preventDefault();
        $('#pay-button').prop('disabled', true);
        OpenPay.token.extractFormAndCreate('payment-form', function(response){
          console.log(response);
          var tokenId = response.data.id;
          $('#token_id').val(token_id);
          $('#payment-form').submit();
        }, function(error){
          console.log(error);
          $('#pay-button').prop('disabled', false);
        });
      });
    });
  </script>
@endpush
