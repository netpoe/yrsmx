<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Estilo</h1>
        <h2>¿Cuáles son tus colores favoritos para vestir?</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/checkbox', ['field' => $section->getField('colors')])

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
