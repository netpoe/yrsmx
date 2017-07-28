<?php
  $displayWeatherField = $section->getViewParams()['displayWeatherField'];
?>

<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Trabajo</h1>
        <h2>¿Qué tipo de viaje será?</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/radio', ['field' => $section->getField('trip_type')])

        @if ($displayWeatherField)
          @include('fields/radio', ['field' => $section->getField('weather')])
        @endif

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
