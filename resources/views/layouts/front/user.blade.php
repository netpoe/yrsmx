<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('head-link')
  </head>
  <body>
    <div class="site-wrapper" id="site-wrapper">
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-4 header-left">
              <a href="#">YOURS</a>
            </div>
            <div class="col-4 header-center"></div>
            <div class="col-4 header-right">
              <nav>
                <a href="#">Mi perfil</a>
                <a href="#">Carrito</a>
                <a href="{{ route('logout') }}">Salir</a>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <main class="site-content" role="main">

        @yield('content')

      </main>
    </div>
    @stack('footer-scripts')
  </body>
</html>
