@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/products/classify.css" rel="stylesheet">
@endpush

@section('content')
  <form action="{{ route('admin.products.store', ['product' => $product->id]) }}" method="POST">
    {{ csrf_field() }}
    <section class="products-wrapper" id="admin-products-classify">
      <div class="products-filters">
        <h5 class="title">Categorías</h5>
        @foreach ($categories as $category)
          <article class="category-group">
            <h6>{{ $category->name }}</h6>
            <ul class="product-categories grid-list grid-list-2 custom-radio-checkbox">
              @foreach ($category->subcategories() as $subcategory)
                <li class="grid-list-item">
                  <input type="radio" value="{{ $subcategory->id }}" name="categories[{{ $category->id }}]" id="category[{{ $category->id }}][{{ $subcategory->id }}]">
                  <label for="category[{{ $category->id }}][{{ $subcategory->id }}]">{{ $subcategory->value }}</label>
                </li>
              @endforeach
            </ul>
          </article>
        @endforeach

        <h5 class="title">Atributos</h5>
        @foreach ($attributes as $attribute)
          <article class="category-group">
            <h6>{{ $attribute->name }}</h6>
            <ul class="product-categories grid-list grid-list-2 custom-radio-checkbox">
              @foreach ($attribute->subattributes() as $subattribute)
                <li class="grid-list-item">
                  <input type="checkbox" value="{{ $subattribute->id }}" name="attributes[{{ $attribute->id }}][]" id="attribute[{{ $attribute->id }}][{{ $subattribute->id }}]">
                  <label for="attribute[{{ $attribute->id }}][{{ $subattribute->id }}]">{{ $subattribute->value }}</label>
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
              <a href="{{ route('admin.products.show', ['product' => $product->id]) }}" class="btn btn-sm btn-secondary">Ver producto</a>
            </nav>
          </div>
        </div>
        <ul class="grid-list grid-list-4 products-list">
          @foreach ($product->files as $file)
            <li class="product-item">
              <div>
                <a href="{{ route('admin.products.show', ['product' => $product->id]) }}" class="img-wrapper"><img src="{{ $file->file_src }}" alt="{{ $file->filename }}"></a>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  </form>
@endsection

