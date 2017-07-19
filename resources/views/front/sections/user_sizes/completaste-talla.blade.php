<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md"></div>
    </header>
    <div class="section-content">
      <div class="container-md">

        <h1>Genial! Has completado tus datos de talla</h1>
        <h2>Recuerda que éste proceso sólo lo tienes que hacer una sola vez.</h2>
        <h3>Después podrás cambiar los datos en tu perfil una vez que hayas terminado el cuestionario.</h3>

      </div>
    </div>
    <footer class="section-footer">
      <div class="container-md">
        <button type="submit" class="btn btn-lg btn-primary">Continuar</button>
      </div>
    </footer>
  </section>

</form>
