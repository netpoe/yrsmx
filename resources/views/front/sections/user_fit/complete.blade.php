<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md"></div>
    </header>
    <div class="section-content">
      <div class="container-md">

        <h1>¡Súper!</h1>

        <h2>Ahora que sabemos cómo te acomoda mejor la ropa, prepárate para lo más divertido:</h2>

        <h2>¡El estilo!</h2>

      </div>
    </div>
    <footer class="section-footer">
      <div class="container-md">
        <button type="submit" class="btn btn-lg btn-primary">Continuar</button>
      </div>
    </footer>
  </section>

</form>
