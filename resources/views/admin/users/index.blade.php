@extends('layouts.admin')

@section('head-link')
  <link href="/css/admin/users/index.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container-fluid" id="admin-user-index">
    <div class="card">
      <small class="card-block-title">Filtrar usuarios ({{ $users->count() }})</small>
      <div class="card-block">
        <nav class="user-resources-nav">
          <a href="{{ route('admin.users.index', ['status' => 'registered']) }}" class="card-link">Registrados</a>
          <a href="{{ route('admin.users.index', ['status' => 'quiz-completed']) }}" class="card-link">Cuestionarios completados</a>
        </nav>
      </div>
    </div>
    <div class="table-responsive users-index-table">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cuestionario</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td><a href="{{ route('admin.users.profile', ['user' => $user->id]) }}">{{ $user->id }}</a></td>
              <td><a href="{{ route('admin.users.profile', ['user' => $user->id]) }}">{{ $user->info->name }}</a></td>
              <td class="capitalize">{{ $user->getLatestQuiz()->status() }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
