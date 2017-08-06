@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/products/show.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container-fluid" id="admin-products-show">
    <div class="row">
      <div class="col-sm-6 products-list">
        <ul class="grid-list grid-list-3">
          @foreach ($product->files as $file)
            <li class="product-item">
              <div>
                <div class="img-wrapper"><img src="{{ $file->file_src }}" alt="{{ $file->filename }}"></div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <small class="card-block-title">Acciones de producto</small>
          <div class="card-block">
            <nav>
              <a href="#" class="btn btn-sm btn-secondary">Asignar imágenes</a>
              <a href="#" class="btn btn-sm btn-secondary">Subir imágenes y asignar</a>
              <a href="#" class="btn btn-sm btn-danger">Borrar producto</a>
            </nav>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">* Este producto todavía no está asignado a un usuario</small>
          <div class="card-block">
            <ul class="product-details-list">
              <li><span>Nombre:</span> <input type="text" class="form-control form-control-sm"></li>
              <li><span>Stock:</span> <input type="number" class="form-control form-control-sm"></li>
              <li><span>Usuarios:</span> <a href="#">#123</a>&nbsp;<a href="#">#324</a></li>
              <li><span>Órdenes:</span> <a href="#">#123</a>&nbsp;<a href="#">#324</a></li>
              <li><span>Carritos:</span> <a href="#">#123</a>&nbsp;<a href="#">#324</a></li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-title-wrapper">
            <small class="card-block-title">Categorías</small>
            <button class="btn btn-sm btn-secondary">Añadir categorías</button>
          </div>
          <div class="card-block">
            <nav class="categories-nav">
              <span>cat 1</span>
              <span>cat 2</span>
              <span>cat 3</span>
              <span>cat 4</span>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-title-wrapper">
            <small class="card-block-title">Atributos</small>
            <button class="btn btn-sm btn-secondary">Añadir atributos</button>
          </div>
          <div class="card-block">
            <nav class="categories-nav">
              <span>attr 1</span>
              <span>attr 2</span>
              <span>attr 3</span>
              <span>attr 4</span>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

