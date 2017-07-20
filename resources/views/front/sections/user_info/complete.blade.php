<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md"></div>
    </header>
    <div class="section-content">
      <div class="container-md">

        <h1>¡Has terminado!</h1>

      </div>
    </div>
    <footer class="section-footer">
      <div class="container-md">
        <button type="submit" class="btn btn-lg btn-primary">Continuar</button>
      </div>
    </footer>
  </section>

</form>
