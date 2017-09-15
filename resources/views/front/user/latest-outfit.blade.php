@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/user/latest-outfit.css" rel="stylesheet">
@endpush

@section('sub-header')
  <form action="{{ route('front.cart.add-products-to-cart') }}" method="POST">
    {{ csrf_field() }}
    <header class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 left"></div>
          <div class="col-sm-4 center"></div>
          <div class="col-sm-4 right">
            <nav>
              <a href="{{ route('front.user.latest-outfit') }}"
                class="btn btn-info">Shuffle!</a>
              <button type="submit" class="btn btn-primary"><i class="icon-cart"></i> Ir al carrito</button>
            </nav>
          </div>
        </div>
      </div>
    </header>
@endsection

@section('content')
  <div class="container">
    <div class="grid-list grid-list-3 products-list">
      @foreach ($userOutfits as $outfit)
        <div href="#" class="grid-list-item product-item outfit-item">
          <div>
            <div class="top">
              <a href="#" class="btn btn-sm btn-danger"><i class="icon-cart"></i> Seleccionar todo el outfit</a>
            </div>
            <div class="center">
              @foreach ($outfit as $product)
                <div class="img-wrapper"
                  style="z-index: {{ $product->subcategory->zIndex }}; top: {{ $product->subcategory->positionTop }}%; left: {{ $product->subcategory->positionLeft }}%">
                  <input type="checkbox" id="products[{{ $product->id }}]" name="products[{{ $loop->index }}]" value="{{ $product->id }}">
                  <label
                    for="products[{{$product->id}}]"
                    style="background-image: url({{ $product->files->first()->file_src }})">
                    <i class="icon-checkmark-circle"></i>
                  </label>
                </div>
              @endforeach
            </div>
            <div class="bottom"></div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection

@push('footer-scripts')
  </form>
@endpush
