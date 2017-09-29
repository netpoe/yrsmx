@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/users/index.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container-fluid" id="admin-orders-index">
    <div class="card">
      <small class="card-block-title">Filtrar órdenes ({{ $orders->count() }})</small>
      <div class="card-block">
        <nav class="user-resources-nav">
          <a href="{{ route('admin.orders.index') }}" class="card-link">Todas</a>
          <a href="{{ route('admin.orders.index', ['status' => \App\Model\LuOrderStatusAdapter::PAID]) }}" class="card-link">Pagadas / Pendientes de envío</a>
          <a href="{{ route('admin.orders.index', ['status' => \App\Model\LuOrderStatusAdapter::IN_TRANSIT]) }}" class="card-link">En tránsito</a>
        </nav>
      </div>
    </div>
    <div class="table-responsive users-index-table">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Estatus</th>
            <th>Usuario</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr>
              <td>{{ $order->id }}</td>
              <td>{{ $order->status->value }}</td>
              <td>{{ $order->user_id }}</td>
              <td><a href="{{ route('admin.orders.show', ['order' => $order->id]) }}">Ver detalles</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
