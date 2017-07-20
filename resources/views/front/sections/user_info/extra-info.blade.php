<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Acerca de ti</h1>
        <h2>Ésta es la última sección. Cuéntanos un poco más de ti.</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/textarea', ['field' => $section->getField('occupation')])
        @include('fields/textarea', ['field' => $section->getField('extras')])

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

