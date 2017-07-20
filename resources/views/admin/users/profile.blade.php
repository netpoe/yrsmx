@extends('layouts.admin')

@section('head-link')
  <link href="/css/admin/users/profile.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid" id="admin-user-profile">
    <div class="row">
      <div class="col-sm-7">
        <div class="card">
          <small class="card-block-title">Cuestionarios ({{ $user->quizzes->count() }})</small>
          <div class="card-block card-block-scroll">
            @foreach ($user->quizzes as $quiz)
              <ul class="user-details-list">
                <li><strong>ID:</strong><span>{{ $quiz->id }}</span></li>
                <li><strong>Status:</strong><span>{{ $quiz->status() }}</span></li>
                <li><strong>Fecha de comienzo:</strong><span>{{ $quiz->started_at }}</span></li>
              </ul>
            @endforeach
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Tallas</small>
          <div class="card-block">
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Cuerpo</small>
          <div class="card-block">
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Fit</small>
          <div class="card-block">
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Estilo</small>
          <div class="card-block">
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Redes sociales</small>
          <div class="card-block">
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="card">
          <small class="card-block-title">Acciones</small>
          <div class="card-block">
            <nav class="user-resources-nav">
              <a href="#" class="btn btn-sm btn-secondary">Asignar outfit</a>
            </nav>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Datos personales</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li><strong>Nombre:</strong><span>{{ $user->info->fullName() }}</span></li>
              <li><strong>Email:</strong><span>{{ $user->email }}</span></li>
              <li><strong>Edad:</strong><span>{{ $user->info->dob }}</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
