<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head-link')
  </head>
  <body>
    <div class="site-wrapper" id="site-wrapper">
      <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 header-left">
              <a href="#">YOURS</a>
            </div>
            <div class="col-sm-4 header-center"></div>
            <div class="col-sm-4 header-right">
              @if (Auth::check())
                <a href="{{ route('logout') }}">Guardar y Salir</a>
              @else
                <a href="{{ route('login') }}">Ingresa</a>
              @endif
            </div>
          </div>
        </div>
      </header>
      <main class="site-content" role="main">

        @yield('content')

      </main>
    </div>
    @yield('footer-scripts')
  </body>
</html>
