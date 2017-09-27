@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/checkout/show.css" rel="stylesheet">
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
                  <button class="btn btn-primary btn-lg btn-block">Pagar <i class="icon-chevron-right"></i></button>
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

@endpush
