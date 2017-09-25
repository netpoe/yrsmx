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
            <a href="{{ route('front.cart.show') }}"><i class="icon-chevron-left"></i> Regresar</a>
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
        <div class="card">
          <small class="card-block-title">Opciones de envío</small>
          <div class="card-block">
            @if ($user->addresses->isEmpty())
              <h5>No tienes direcciones de envío. Agrega una:</h5>
              <form action="{{ $userAddressForm->getOnPostActionString() }}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                  <div class="col-sm-4">
                    @include('fields/select', ['field' => $userAddressForm->getField('country_id')])
                  </div>
                  <div class="col-sm-4">
                    @include('fields/select', ['field' => $userAddressForm->getField('state_id')])
                  </div>
                  <div class="col-sm-4">
                    @include('fields/text', ['field' => $userAddressForm->getField('zip_code')])
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-7">
                    @include('fields/text', ['field' => $userAddressForm->getField('street')])
                  </div>
                  <div class="col-sm-5">
                    @include('fields/text', ['field' => $userAddressForm->getField('interior')])
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    @include('fields/text', ['field' => $userAddressForm->getField('city')])
                  </div>
                  <div class="col-sm-6">
                    @include('fields/text', ['field' => $userAddressForm->getField('neighborhood')])
                  </div>
                </div>

                <fieldset class="form-group">
                  <button type="submit" class="btn btn-lg btn-secondary btn-block">Agregar dirección de envío</button>
                </fieldset>

              </form>
            @else
            @endif
          </div>
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
                <h2 class="title">Envío:</h2>
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
            <button class="btn btn-primary btn-lg btn-block">Continuar <i class="icon-chevron-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
@endpush
