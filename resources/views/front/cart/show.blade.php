@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/user/latest-outfit.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container">
    <div class="cart-products-list">
      @foreach ($productsInCart as $product)
        <article class="product">
          <div class="img-wrapper"></div>
          <div class="info"></div>
          <div class="actions">
            {{ $product->amount }}
          </div>
        </article>
      @endforeach
    </div>
  </div>
@endsection

@push('footer-scripts')
@endpush
