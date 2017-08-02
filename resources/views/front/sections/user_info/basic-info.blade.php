<form action="{{ $section->getOnPostActionString() }}" method="POST">
  {{ csrf_field() }}

  <section class="section">
    <header class="section-header">
      <div class="container-md">
        <h1>Acerca de ti</h1>
        <h2>Estamos por terminar, cuéntamos cómo te llamas y cuándo naciste</h2>
      </div>
    </header>
    <div class="section-content">
      <div class="container-md">

        @include('fields/hidden', ['field' => $section->getField('dob')])

        <?php
          $field = $section->getField('dob');
          $date = strtotime($field->getValue());
          $day = date('d', $date);
          $month = date('m', $date);
          $year = date('Y', $date);
          ?>

        <ul class="grid-list grid-list-3 grid-list-1-xs">
          <li>
            <fieldset class="form-group">
              <label>Día</label>
              <select onchange="return setDateOfBirth(this)" type="text" id="day" class="form-control form-control-lg">
                <option value="" disabled>Selecciona una opción</option>
                @for ($i = 1; $i <= 31; $i++)
                  @if ($i == $day)
                    <option value="{{ $i }}" selected>{{ $i }}</option>
                  @else
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endif
                @endfor
              </select>
            </fieldset>
          </li>
          <li>
            <fieldset class="form-group">
              <label>Mes</label>
              <select onchange="return setDateOfBirth(this)" type="text" id="month" class="form-control form-control-lg">
                <option value="" disabled>Selecciona una opción</option>
                @for ($i = 1; $i <= 12; $i++)
                  @if ($i == $month)
                    <option value="{{ $i }}" selected>{{ $i }}</option>
                  @else
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endif
                @endfor
              </select>
            </fieldset>
          </li>
          <li>
            <fieldset class="form-group">
              <label>Año</label>
              <select onchange="return setDateOfBirth(this)" type="text" id="year" class="form-control form-control-lg">
                <option value="" disabled>Selecciona una opción</option>
                @for ($i = date('Y'); $i >= 1920; $i--)
                  @if ($i == $year)
                    <option value="{{ $i }}" selected>{{ $i }}</option>
                  @else
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endif
                @endfor
              </select>
            </fieldset>
          </li>
        </ul>

        @include('fields/text', ['field' => $section->getField('name')])

        <div class="row">
          <div class="col-sm-6">
            @include('fields/text', ['field' => $section->getField('paternal_last_name')])
          </div>
          <div class="col-sm-6">
            @include('fields/text', ['field' => $section->getField('maternal_last_name')])
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

@push('footer-scripts')
  <script>
    (function(global){
      $day = document.getElementById('day');
      $month = document.getElementById('month');
      $year = document.getElementById('year');
      $dob = document.getElementById('dob');

      global.setDateOfBirth = function(el){
        if ($day.value && $month.value && $year.value) {
          $dob.value = $year.value + '-' + $month.value + '-' + $day.value;
        }
      }
    })(window)
  </script>
@endpush












