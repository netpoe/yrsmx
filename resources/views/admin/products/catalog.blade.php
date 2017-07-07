@extends('layouts.admin')

@section('head-link')
<link href="/css/admin/products/catalog.css" rel="stylesheet">
@endsection

@section('site-wrapper')
  <section id="upload-products-modal">
    <div>
      <form method="POST" action="{{ route('admin.products.create') }}">
        {{ csrf_field() }}
        <header class="modal-header">
          <div>
            <h3>Asigna imágenes a un producto</h3>
            <p>Selecciona imágenes, da clic en crear producto y después categoriza el producto creado.</p>
          </div>
          <div>
            <nav>
              <button class="btn btn-secondary">Cancelar</button>
              <button type="submit" class="btn btn-primary">Crear producto</button>
            </nav>
          </div>
        </header>
        <div class="modal-body products-list">
          <ul class="grid-list grid-list-6">
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-1" name="product-image">
                <label for="product-id-1" class="img-wrapper"><img src="/img/products/product-1.jpg" alt=""></label>
              </div>
            </li>
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-2" name="product-image">
                <label for="product-id-2" class="img-wrapper"><img src="/img/products/product-2.jpg" alt=""></label>
              </div>
            </li>
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-3" name="product-image">
                <label for="product-id-3" class="img-wrapper"><img src="/img/products/product-3.jpg" alt=""></label>
              </div>
            </li>
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-4" name="product-image">
                <label for="product-id-4" class="img-wrapper"><img src="/img/products/product-4.jpg" alt=""></label>
              </div>
            </li>
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-5" name="product-image">
                <label for="product-id-5" class="img-wrapper"><img src="/img/products/product-5.jpg" alt=""></label>
              </div>
            </li>
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-6" name="product-image">
                <label for="product-id-6" class="img-wrapper"><img src="/img/products/product-6.jpg" alt=""></label>
              </div>
            </li>
            <li class="product-item">
              <div>
                <input type="checkbox" id="product-id-7" name="product-image">
                <label for="product-id-7" class="img-wrapper"><img src="/img/products/product-7.jpg" alt=""></label>
              </div>
            </li>
          </ul>
        </div>
        <footer class="modal-footer"></footer>
      </form>
    </div>
  </section>
@endsection

@section('content')
<div class="container-fluid" id="admin-product-catalog">
  <form
  method="POST"
  enctype="multipart/form-data"
  action="{{ route('admin.products.upload') }}"
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
  var $uploadDocumentsModal = document.getElementById('upload-products-modal');

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
