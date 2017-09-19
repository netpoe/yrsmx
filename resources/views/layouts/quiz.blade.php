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
                @auth
                  <a href="{{ route('logout') }}">Guardar y Salir</a>
                  <a href="#">Mi perfil</a>
                  @if (Auth::user()->latestOutfit())
                    <a href="{{ route('front.user.latest-outfit') }}">Ver mi outfit</a>
                  @endif
                  <a href="#">Carrito</a>
                @else
                  <a href="{{ route('login') }}">Ingresa</a>
                @endauth
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
