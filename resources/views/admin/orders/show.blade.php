@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/orders/show.css" rel="stylesheet">
@endpush

@section('content')
  <div class="container-fluid" id="admin-orders-show">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <small class="card-block-title">Detalles de la orden</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li><strong>Estatus:</strong><span>{{ $order->status->value }}</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <small class="card-block-title">Dirección de envío</small>
          <div class="card-block">
            {{ $order->address->toString() }}
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Detalles del cliente</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li><strong>Nombre:</strong><a href="{{ route('admin.users.profile', ['user' => $order->user->id ]) }}">{{ $order->user->info->fullName() }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
