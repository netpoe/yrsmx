@extends('layouts.admin-auth')

@section('head-link')
<link href="/css/admin/auth/login.css" rel="stylesheet">
@endsection

@section('content')
<div class="container-sm">
  <h1>Ingresa</h1>
  <form role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <fieldset class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email">Correo electrónico</label>

      <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autofocus>

      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </fieldset>

    <fieldset class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password">Password</label>

      <input id="password" type="password" class="form-control form-control-lg" name="password" required>

      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </fieldset>

    <fieldset class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
        </label>
      </div>
    </fieldset>

    <fieldset class="form-group">
      <button type="submit" class="btn btn-secondary btn-lg btn-block">Ingresa <i class="icon-chevron-right"></i></button>
      <div>
        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
      </div>
    </fieldset>
  </form>
</div>
@endsection
