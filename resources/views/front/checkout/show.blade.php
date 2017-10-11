@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/checkout/show.css" rel="stylesheet">
@endpush

@push('head-scripts')
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
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
  @include('components/ebm-alert')

  <div class="row">
    <div class="col-sm-7">
      <div class="card">
        <small class="card-block-title">Métodos de pago</small>
        <div class="card-block">
          <div id="paypal-button"></div>
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
                    <p class="price">Precio: {{ $product->getPrice()->toCurrency() }}</p>
                    @if ($product->getDiscount()->toPercentageString())
                    <p class="discount">Descuento: {{ $product->getDiscount()->toPercentageString() }}</p>
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
  <script src="/js/axiosjs/axios.min.js"></script>
  {{-- PAYPAL --}}
  <script>
    paypal.Button.render({
      env: "{{ getenv('ENV') == 'prod' ? 'production' : 'sandbox' }}",
      client: {
        sandbox: 'ASMkPLxyIIkcod6IsNPiONUuJJCk_GcnJNOkJWjrtEX_agnIdePztU5OzhxdczwaQUgYlSjxorsHA4Ez',
        production: 'xxxxxxxxx'
      },
      commit: true,
      payment: function(data, actions) {
        return actions.payment.create({
          payment: {
            transactions: [
              {
                amount: { total: '{{ $cart->getTotalPlusTaxes()->round() }}', currency: 'MXN' }
              }
            ]
          }
        }, function(error, payment){
          console.log(error, payment);
        });
      },
      onError: function(error, e){
        var paymentErrorAlert = new EbmAlert;
        paymentErrorAlert.display('danger', 'No hemos podido procesar tu pago', 'Por favor, intenta de nuevo.');
      },
      onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
          console.log(payment);
          payment.paymentType = "{{ \App\Model\OrdersAdapter::TYPE_PAYPAL }}";
          axios({
            url: "{{ route('front.orders.store') }}",
            data: payment,
            method: 'POST',
          }).then(function(response){
            console.log(response);
          }).catch(function(error){
            console.log(error);
            var paymentErrorAlert = new EbmAlert;
            paymentErrorAlert.display('danger',
              'Hubo un error creando tu orden',
              'No te preocupes, tu pago ya fue realizado con éxito, pero tuvimos un problema al registrar tu orden. Te contactaremos cuanto antes.');
          });
        });
      }
    }, '#paypal-button');
  </script>
@endpush
