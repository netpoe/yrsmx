@extends('layouts.admin-auth')

@section('head-link')
<link href="/css/admin/auth/login.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container-sm">
    <h1>Solicita un cambio de contraseña</h1>
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.email') }}">
      {{ csrf_field() }}

      <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Correo electrónico</label>

        <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </fieldset>

      <fieldset class="form-group">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Enviar <i class="icon-chevron-right"></i></button>
      </fieldset>
    </form>
  </div>
@endsection
