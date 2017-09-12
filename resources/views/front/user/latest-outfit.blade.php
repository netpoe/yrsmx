@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/user/latest-outfit.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container">
    <div class="grid-list grid-list-3 products-list">
      @foreach ($userOutfits as $outfit)
        <div href="#" class="grid-list-item outfit-item">
          <div>
            @foreach ($outfit as $product)
              <div class="img-wrapper"
                style="z-index: {{ $product->subcategory->zIndex }}; top: {{ $product->subcategory->positionTop }}%; left: {{ $product->subcategory->positionLeft }}%">
                <img src="{{ $product->files->first()->file_src }}" alt="{{ $product->files->first()->filename }}">
              </div>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
