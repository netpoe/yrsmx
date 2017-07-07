@extends('layouts.admin')

@section('head-link')
<link href="/css/admin/product/index.css" rel="stylesheet">
@endsection

@section('site-wrapper')
  <section id="upload-documents-modal">
    <div>
      <header class="modal-header">
        <div>
          <h3>Asignar imágenes a un producto</h3>
          <nav>
            <button class="btn btn-secondary">Cancelar</button>
            <button class="btn btn-primary">Crear producto</button>
          </nav>
        </div>
      </header>
      <div class="modal-body"></div>
      <footer class="modal-footer"></footer>
    </div>
  </section>
@endsection

@section('content')
<div class="container-fluid" id="admin-product-index">
  <form
  method="POST"
  enctype="multipart/form-data"
  action="{{ route('admin.product.upload') }}"
  class="dropzone"
  id="product-upload"></form>

  <div class="products-wrapper">
    <div class="products-filters">
      <h5>Filtrar productos por</h5>
    </div>
    <div class="products-list">
      <ul class="grid-list grid-list-2">
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </div>

</div>
@endsection

@section('footer-scripts')
<script src="/js/dropzonejs/dropzone.js"></script>
<script src="/js/axiosjs/axios.min.js"></script>
<script>
  var defaultMessage = 'Arrastra tus imágenes o <button type="button" class="btn btn-primary btn-sm btn-outline">selecciona imágenes</button>';
  var maxFilesize = 1500;
  var $uploadDocumentsModal = document.getElementById('upload-documents-modal');

  Dropzone.options.productUpload = {
    dictDefaultMessage: defaultMessage,
    dictFileTooBig: 'filetoobig',
    dictInvalidFileType: 'invalidfiletype',
    acceptedFiles: 'image/png,image/jpg,image/jpeg,application/pdf',
    autoProcessQueue: false,
    headers: {
      "Access-Control-Allow-Origin": '*',
    },
    uploadMultiple: true,
    maxFilesize: maxFilesize,
    parallelUploads: 100,
    timeout: 60000,

    resizeWidth: 1024,
    resizeHeight: null,

    addFile: function(file){
      $uploadDocumentsModal.style.display = 'block';
    },
  }
</script>
@endsection
