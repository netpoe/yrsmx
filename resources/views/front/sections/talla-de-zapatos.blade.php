<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Talla</h1>
        <h2>Ahora, selecciona las tallas de brassiere que utilizas</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/radio', ['field' => $section->getField('shoes')])

        @if (session()->has('error'))
          <div class="ebm-alert ebm-alert-danger">
            <div class="alert-left"><i class="icon-notification-circle"></i></div>
            <div class="alert-right">
              <div class="alert-content">
                <h5>{{ session()->get('error') }}</h5>
              </div>
            </div>
          </div>
        @endif

      </div>
    </div>
    <footer class="section-footer">
      <div class="container-md">
        <button type="submit" class="btn btn-lg btn-primary">Continuar</button>
      </div>
    </footer>
  </section>

</form>
