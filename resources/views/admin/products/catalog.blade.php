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
          <ul class="grid-list grid-list-6" v-if="unassignedImages">
            <li class="product-item" v-for="$item in unassignedImages">
              <div>
                <input type="checkbox" :id="$item.id" name="product-images[]" :value="$item.id">
                <label :for="$item.id" class="img-wrapper">
                  <img :src="$item.file_src" :alt="$item.filename">
                </label>
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
  id="product-upload">
    {{ csrf_field() }}
  </form>

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
<script src="/js/vuejs/vue.{{ env('APP_ENV') == 'local' ? 'dev' : 'prod' }}.js"></script>
<script src="/js/classes/AdminProductsCatalog.js"></script>
<script>
  new Vue({
    el: '#upload-products-modal',
    data: {
      AdminProductsCatalog: new AdminProductsCatalog,
      unassignedImages: [],
    },
    created: function(){
      this.getUnassignedFiles();
    },
    methods: {
      getUnassignedFiles: function(){
        var $vm = this;

        $vm.AdminProductsCatalog
          .getUnassignedFiles("{{ route('admin.products.get-unassigned-files') }}", function(response){
            $vm.unassignedImages = response.data;
            $vm.$el.style.display = 'block';
          });
      }
    }
  });
</script>
<script>
  var defaultMessage = 'Arrastra tus imágenes o <button type="button" class="btn btn-primary btn-sm btn-outline">selecciona imágenes</button>';
  var maxFilesize = 1500;
  Dropzone.options.productUpload = {
    dictDefaultMessage: defaultMessage,
    dictFileTooBig: 'filetoobig',
    dictInvalidFileType: 'invalidfiletype',
    acceptedFiles: 'image/png,image/jpg,image/jpeg',
    // autoProcessQueue: false,
    headers: {
      "Access-Control-Allow-Origin": '*',
    },
    uploadMultiple: true,
    maxFilesize: maxFilesize,
    parallelUploads: 100,
    timeout: 60000,

    resizeWidth: 1024,
    resizeHeight: null,

    successmultiple: function(files, response){
      console.log(files, response);
    },
  }
</script>
@endsection
