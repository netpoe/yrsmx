@extends('layouts.admin')

@section('head-link')
<link href="/css/admin/products/catalog.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="admin-products-product">
  <div class="row">
    <div class="col-sm-6 products-list">
      <ul class="grid-list grid-list-3">
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-block">
          <small>Acciones de producto</small>
          <nav>
            <a href="#" class="card-link">Asignar imágenes</a>
            <a href="#" class="card-link">Subir imágenes y asignar</a>
            <a href="#" class="card-link text-danger">Borrar producto</a>
          </nav>
        </div>
      </div>
      <div class="card">
        <div class="card-block">
          <h6>* Este producto todavía no está asignado a un usuario</h6>
          <h5>Nombre: </h5>
          <h5>Estatus: </h5>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer-scripts')

@endsection
