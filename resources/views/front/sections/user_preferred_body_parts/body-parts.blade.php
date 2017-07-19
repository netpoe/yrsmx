<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Partes del cuerpo</h1>
        <h2>¿Qué partes de tu cuerpo quieres resaltar o disimular?</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/radio', ['field' => $section->getField('thighs')])
        @include('fields/radio', ['field' => $section->getField('calves')])
        @include('fields/radio', ['field' => $section->getField('abdomen')])
        @include('fields/radio', ['field' => $section->getField('hips')])
        @include('fields/radio', ['field' => $section->getField('butt')])
        @include('fields/radio', ['field' => $section->getField('shoulders')])
        @include('fields/radio', ['field' => $section->getField('breast')])
        @include('fields/radio', ['field' => $section->getField('arms')])

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
