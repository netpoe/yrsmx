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
            <a href="{{ route('front.user.latest-outfit') }}" class="btn btn-info"><i class="icon-chevron-left"></i> Regresar</a>
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
        <div class="cart-products-list">
          @foreach ($productsInCart as $product)
            <article class="product">
              <div class="img-wrapper">
                <div style="background-image: url({{ $product->files->first()->file_src }})"></div>
              </div>
              <div class="info">
                <div>
                  {{ $product->files->first()->filename }}
                </div>
              </div>
              <div class="actions">
                <div>
                  <div class="remove-item">
                    <div>
                      <i class="icon-cross-circle"></i>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          @endforeach
        </div>
      </div>
      <div class="col-sm-4">
        <div class="cart-checkout-block">
          <div class="top">
            <h1>Confirma tu compra</h1>
          </div>
          <div class="center">
            <div class="row">
              <div class="col-sm-6">
                <h2 class="title">Subtotal:</h2>
              </div>
              <div class="col-sm-6">
                <h2 class="amount">$800.00</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h2 class="title">Descuentos:</h2>
              </div>
              <div class="col-sm-6">
                <h2 class="amount">$800.00</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h2 class="title">Impuestos:</h2>
              </div>
              <div class="col-sm-6">
                <h2 class="amount">$800.00</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <h2 class="title">Total:</h2>
              </div>
              <div class="col-sm-6">
                <h2 class="amount">$800.00</h2>
              </div>
            </div>
          </div>
          <div class="bottom">
            <button class="btn btn-primary btn-lg btn-block">Continuar <i class="icon-chevron-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
@endpush
