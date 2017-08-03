@extends('layouts.admin-auth')

@push('head-link')
  <link href="/css/admin/auth/login.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container-sm">
    <h1>Actualiza tu contraseña</h1>
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    <form role="form" method="POST" action="{{ route('password.request') }}">
      {{ csrf_field() }}

      <input type="hidden" name="token" value="{{ $token }}">

      <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Correo electrónico</label>
        <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ $email or old('email') }}" required autofocus>

        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </fieldset>

      <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Contraseña</label>

        <input id="password" type="password" class="form-control form-control-lg" name="password" required>

        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </fieldset>

      <fieldset class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label for="password-confirm">Confirma tu contraseña</label>
        <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required>

        @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
        @endif
      </fieldset>

      <fieldset class="form-group">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Actualizar <i class="icon-chevron-right"></i></button>
      </fieldset>
    </form>
  </div>
@endsection
