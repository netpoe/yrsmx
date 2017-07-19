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

        @include('includes/section-error-alert')

      </div>
    </div>
    <footer class="section-footer">
      <div class="container-md">
        <button type="submit" class="btn btn-lg btn-primary">Continuar</button>
      </div>
    </footer>
  </section>

</form>
