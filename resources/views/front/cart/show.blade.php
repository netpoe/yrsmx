@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/cart/show.css" rel="stylesheet">
@endpush

@section('sub-header')
  <header class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 left">
          <nav>
            <a href="{{ route('front.user.latest-outfit') }}"><i class="icon-chevron-left"></i> Regresar</a>
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
      <div class="col-sm-8">
        @if ($productsInCart->isEmpty())
          <p>No hay productos qué mostrar</p>
        @else
          <div class="card">
            <small class="card-block-title">Productos</small>
            <div class="card-block">
              <div class="cart-products-list">
                @foreach ($productsInCart as $product)
                  <article class="product">
                    <div class="img-wrapper">
                      <div style="background-image: url({{ $product->files->first()->file_src }})"></div>
                    </div>
                    <div class="info">
                      <div>
                        <p class="name">{{ $product->name }}</p>
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
          </div>
        @endif
      </div>
      <div class="col-sm-4">
        <div class="card">
          <small class="card-block-title">Confirma tu compra</small>
          <div class="card-block">
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
                    <h2 class="title">Total:</h2>
                    <small>(IVA del 16% incluído)</small>
                  </div>
                  <div class="col-sm-6">
                    <h2 class="amount">{{ $cart->getTotalPlusTaxes()->toCurrency() }}</h2>
                  </div>
                </div>
              </div>
              <div class="bottom">
                <a href="{{ route('front.shipping.show') }}" class="btn btn-primary btn-lg btn-block">Continuar <i class="icon-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
@endpush
