@extends('layouts.admin-auth')

@section('head-link')
  <link href="/css/admin/auth/login.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid" id="admin-auth-login">
    <div class="container-sm">
        <form action="{{ $form->getOnPostActionString() }}" method="POST" id="register-form">
          {{ csrf_field() }}

          @include('fields.text', ['field' => $form->getField('email')])
          @include('fields.text', ['field' => $form->getField('password')])

          <button type="submit" class="btn btn-secondary btn-lg btn-block">Continuar <i class="icon-chevron-right"></i></button>
        </form>
    </div>
  </div>
@endsection
