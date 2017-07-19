<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Talla</h1>
        <h2>Empecemos por lo simple, déjanos saber cuáles son tus medidas</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        <div class="row">
          <div class="col-sm-6">
            @include('fields/text', ['field' => $section->getField('weight')])
          </div>
          <div class="col-sm-6">
            @include('fields/text', ['field' => $section->getField('height')])
          </div>
        </div>

        @if (session()->has('error'))
          <div class="ebm-alert ebm-alert-danger">
            <div class="alert-left"><i class="icon-notification-circle"></i></div>
            <div class="alert-right">
              <div class="alert-content flex-column-center minh-70 normalize-text">
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
