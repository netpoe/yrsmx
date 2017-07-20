<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Fit</h1>
        <h2>Ahora, ayúdanos a saber cómo te gusta que te queden las prendas en la parte superior</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/radio', ['field' => $section->getField('upper_part_fit')])

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
