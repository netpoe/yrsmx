@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/products/classify.css" rel="stylesheet">
@endpush

@section('content')
  <form action="{{ route('admin.products.store', ['product' => $product->id]) }}" method="POST">
    {{ csrf_field() }}
    <section class="products-wrapper" id="admin-products-classify">
      <div class="products-filters">
        <h5>Categorizar producto</h5>
        @foreach ($categories as $category)
          <article class="category-group">
            <h6>{{ $category->value }}</h6>
            <ul class="product-categories grid-list grid-list-2 custom-radio-checkbox">
              @foreach ($category->subcategories() as $subcategory)
                <li class="grid-list-item">
                  <input type="radio" value="{{ $subcategory->key }}" name="categories[{{ $category->key }}]" id="category[{{ $category->key }}][{{ $subcategory->key }}]">
                  <label for="category[{{ $category->key }}][{{ $subcategory->key }}]">{{ $subcategory->value }}</label>
                </li>
              @endforeach
            </ul>
          </article>
        @endforeach
      </div>
      <div class="products-list-wrapper">
        <div class="card">
          <small class="card-block-title">Acciones</small>
          <div class="card-block">
            <nav class="user-resources-nav">
              <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
            </nav>
          </div>
        </div>
        <ul class="grid-list grid-list-4 products-list">
          @foreach ($product->files as $file)
            <li class="product-item">
              <div>
                <div class="img-wrapper"><img src="{{ $file->file_src }}" alt="{{ $file->filename }}"></div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  </form>
@endsection

