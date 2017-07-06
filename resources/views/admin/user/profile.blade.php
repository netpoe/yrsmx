@extends('layouts.admin')

@section('head-link')
  <link href="/css/admin/user/profile.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid" id="admin-user-profile" v-cloak>
    <div class="row">
      <ul class="grid-list grid-list-2">
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-1.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-2.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-3.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-4.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-5.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-6.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-7.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
        <li class="product-item">
          <div>
            <div class="img-wrapper" style="background-image: url(/img/products/product-8.jpg)"></div>
            <div class="features">
              <a href="#" class="title">Nombre del producto</a>
              <small class="assigned-to">Asignado a: <a href="#">#user_id</a></small>
              <small>Categorías</small>
              <nav class="categories-nav">
                <a href="#">subcat-1</a> <a href="#">subcat-2</a> <a href="#">subcat-3</a>
              </nav>
              <small>Atributos</small>
              <nav class="categories-nav">
                <a href="#">subattr-1</a> <a href="#">subattr-2</a> <a href="#">subattr-3</a>
              </nav>
            </div>
          </div>
        </li>
      </ul>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-block">
            <h4 class="card-title"></h4>
            <h6></h6>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <ul class="grid-list grid-list-4 grid-list-1-xs grid-list-2-sm user-profile-grid">
          <li>
            <article class="card">
              <div class="card-block"></div>
            </article>
          </li>
        </ul>
      </div>
    </div>
    <div class="card">
      <div class="card-block">
        <nav class="user-resources-nav">
          <small>Acciones</small>
          <a href="#" class="card-link">accion</a>
          <a href="#" class="card-link">accion</a>
          <a href="#" class="card-link">accion</a>
        </nav>
      </div>
    </div>
  </div>
@endsection

@section('footer-scripts')
  <script src="https://unpkg.com/vue"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script>
    var app = new Vue({
      el: '#admin-user-profile',
      data: {},
      created: function(){
        // this.getProfiles();
      },
      methods: {
        getProfiles: function(){
          var vm = this;
          var url = "";
          axios.get(url)
          .then(function(response){
            console.log(response);
          }).catch(function(error){
            console.log(error);
          });
        },
      }
    })
  </script>
@endsection
