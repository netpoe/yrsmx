<header class="top-menu">
  <div class="top-menu-left">
    <div class="top-menu-item">
      <div><a href="{{ route('admin.products.catalog') }}">Productos</a></div>
      <ul class="top-menu-dropdown">
        <li class="top-menu-sub-item"><a href="{{ route('admin.products.catalog') }}">Catálogo</a></li>
        <li class="top-menu-sub-item"><a href="#">Categorías</a></li>
        <li class="top-menu-sub-item"><a href="#">Atributos</a></li>
        <li class="top-menu-sub-item"><a href="#">Inventario</a></li>
      </ul>
    </div>
    <div class="top-menu-item">
      <div><a href="{{ route('admin.users.index') }}">Usuarios</a></div>
      <ul class="top-menu-dropdown">
        <li class="top-menu-sub-item"><a href="{{ route('admin.users.index', ['status' => 'quiz-completed']) }}">Listos para selección</a></li>
      </ul>
    </div>
    <div class="top-menu-item">
      <div><a href="#">Cuestionarios</a></div>
      <ul class="top-menu-dropdown"> </ul>
    </div>
    <div class="top-menu-item">
      <div><a href="#">Analytics</a></div>
      <ul class="top-menu-dropdown">
        <li class="top-menu-sub-item"><a href="#">Órdenes</a></li>
        <li class="top-menu-sub-item"><a href="#">Usuarios</a></li>
        <li class="top-menu-sub-item"><a href="#">Cuestionarios</a></li>
        <li class="top-menu-sub-item"><a href="#">Productos</a></li>
      </ul>
    </div>
  </div>
  <div class="top-menu-right">
    <div class="top-menu-item">
      <div><a href="{{ route('logout') }}">Salir</a></div>
    </div>
  </div>
</header>
