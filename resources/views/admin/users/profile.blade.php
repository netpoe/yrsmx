@extends('layouts.admin')

@section('head-link')
  <link href="/css/admin/users/profile.css" rel="stylesheet">
@endsection

<?php
  $lastCompletedQuiz = $user->getLastCompletedQuiz();
  $userSizes = $lastCompletedQuiz->userSizes;
  $userPreferredBodyParts = $lastCompletedQuiz->userPreferredBodyParts;
  $userFit = $lastCompletedQuiz->userFit;
  $userStyle = $lastCompletedQuiz->userStyle;
?>

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
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <small class="card-block-title">Cuerpo</small>
              <div class="card-block">
                <ul class="user-details-list">
                  <li>
                    <strong>Cuerpo:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->bodyType() : null }}</span>
                  </li>
                  <li>
                    <strong>Muslos:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->thighs) : null }}</span>
                  </li>
                  <li>
                    <strong>Pantorrillas:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->calves) : null }}</span>
                  </li>
                  <li>
                    <strong>Pompas:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->butt) : null }}</span>
                  </li>
                  <li>
                    <strong>Abdomen:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->abdomen) : null }}</span>
                  </li>
                  <li>
                    <strong>Caderas:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->hips) : null }}</span>
                  </li>
                  <li>
                    <strong>Busto:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->breast) : null }}</span>
                  </li>
                  <li>
                    <strong>Hombros:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->shoulders) : null }}</span>
                  </li>
                  <li>
                    <strong>Brazos:</strong>
                    <span>{{ $lastCompletedQuiz ? $userPreferredBodyParts->showOrHide($userPreferredBodyParts->arms) : null }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <small class="card-block-title">Tallas</small>
              <div class="card-block">
                <ul class="user-details-list">
                  <li>
                    <strong>Altura:</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->height() : null }}</span>
                  </li>
                  <li>
                    <strong>Peso:</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->weight() : null }}</span>
                  </li>
                  <li>
                    <strong>Blusa:</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->blouse : null }}</span>
                  </li>
                  <li>
                    <strong>Bra (espalda):</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->bra_band : null }}</span>
                  </li>
                  <li>
                    <strong>Bra (copas):</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->bra_cups : null }}</span>
                  </li>
                  <li>
                    <strong>Falda:</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->skirt : null }}</span>
                  </li>
                  <li>
                    <strong>Zapatos:</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->shoes : null }}</span>
                  </li>
                  <li>
                    <strong>Pantalones:</strong>
                    <span>{{ $lastCompletedQuiz ? $userSizes->pants : null }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Fit</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li>
                <strong>Parte superior:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->upperPartFit($userFit->upper_part_fit) : null }}</span>
              </li>
              <li>
                <strong>Parte inferior:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->lowerPartFit($userFit->lower_part_fit) : null }}</span>
              </li>
              <li>
                <strong>Pantalones cadera:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->pantsFitHips($userFit->pants_fit_hips) : null }}</span>
              </li>
              <li>
                <strong>Pantalones forma:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->pantsFitShape($userFit->pants_fit_shape) : null }}</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Estilo</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li>
                <strong>Colores:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->colors($userStyle->colors) : '' }}</span>
              </li>
              <li>
                <strong>Estampados:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->prints($userStyle->prints) : '' }}</span>
              </li>
              <li>
                <strong>Telas:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->fabrics($userStyle->fabrics) : '' }}</span>
              </li>
              <li>
                <strong>Palabras:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->words($userStyle->words) : '' }}</span>
              </li>
              <li>
                <strong>Prendas:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->clothes($userStyle->clothes) : '' }}</span>
              </li>
              <li>
                <strong>Accesorios:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->accessories($userStyle->accessories) : '' }}</span>
              </li>
              <li>
                <strong>Zapatos:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->shoes($userStyle->shoes) : '' }}</span>
              </li>
              <li>
                <strong>Joyas:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->jewelry($userStyle->jewelry) : '' }}</span>
              </li>
              <li>
                <strong>Riesgo:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->risk($userStyle->risk) : '' }}</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Información adicional</small>
          <div class="card-block">
            <h6>¿A qué te dedicas?</h6>
            <p>{{ $user->info->occupation }}</p>
            <h6>¿Hay algo más que quieres que sepamos de ti?</h6>
            <p>{{ $user->info->extras }}</p>
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
              <a href="#" class="btn btn-sm btn-primary">Asignar outfit</a>
            </nav>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Datos personales</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li><strong>Nombre:</strong><span>{{ $user->info->fullName() }}</span></li>
              <li><strong>Email:</strong><span>{{ $user->email }}</span></li>
              <li><strong>Edad:</strong><span>{{ $user->info->age() }}</span></li>
              <li><strong>Celular:</strong><span>{{ $user->info->mobile_number }}</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
