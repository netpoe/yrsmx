@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/products/catalog.css" rel="stylesheet">
@endpush

@section('content')
  <div id="admin-products-catalog">
    <div class="products-wrapper">
      <div class="products-filters">
        <h5>Filtrar productos por</h5>
      </div>
      <div class="products-list-wrapper">
        <div class="card">
          <small class="card-block-title">Acciones</small>
          <div class="card-block">
            <nav class="user-resources-nav">
              <button class="btn btn-sm btn-primary" @click="openUnassignedFilesModal">Crear producto</button>
            </nav>
          </div>
        </div>

        <form
          method="POST"
          enctype="multipart/form-data"
          action="{{ route('admin.products.upload') }}"
          class="dropzone"
          id="product-upload">
          {{ csrf_field() }}
        </form>

        <ul class="grid-list grid-list-6 grid-list-4-sm grid-list-2-xs products-list" v-cloak>
          <li class="product-item" v-for="$product in products">
            <div>
              <a class="img-wrapper" :href="makeProductUrl($product.id)">
                <img :src="$product.file_src" :alt="$product.filename">
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@push('footer-scripts')
  <script src="/js/dropzonejs/dropzone.js"></script>
  <script src="/js/axiosjs/axios.min.js"></script>
  <script src="/js/vuejs/vue.{{ env('APP_ENV') == 'local' ? 'dev' : 'prod' }}.js"></script>
  <script src="/js/classes/AdminProductsCatalog.js"></script>
  <script>
    window.AdminProductsCatalog = new AdminProductsCatalog;

    window.$adminProductsCatalog = new Vue({
      el: '#admin-products-catalog',
      data: {
        products: [],
      },
      created: function(){
        this.getFiles({
          limit: 35
        });
      },
      methods: {
        getFiles: function(data){
          var $vm = this;

          AdminProductsCatalog
            .getFiles("{{ route('admin.products.get-files') }}", data, function(response){
              response.data.forEach(function(product){
                $vm.products.push(product);
              });
            });
        },
        openUnassignedFilesModal: function(){
          var $vm = this;

          $uploadProductsModal.getUnassignedFiles();
        },
        makeProductUrl: function(productId){
          return "{{ route('admin.products.show') }}"  + '/' + productId;
        }
      },
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
        console.log($uploadProductsModal);

        $uploadProductsModal.getUnassignedFiles();
      },
    }
  </script>
@endpush

@include('includes.admin.admin-products-modal')
