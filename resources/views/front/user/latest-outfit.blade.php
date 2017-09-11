@extends('layouts.front.user')

@push('head-link')
<link href="/css/front/user/latest-outfit.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container">
    <div class="grid-list grid-list-3 products-list">
      @foreach ($user->latestOutfit()->products() as $product)
        <a href="#" class="grid-list-item product-item">
          <div>
            <div class="img-wrapper"><img src="{{ $product->files->first()->file_src }}" alt="{{ $product->files->first()->filename }}"></div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
