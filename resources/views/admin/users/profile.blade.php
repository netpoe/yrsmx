@extends('layouts.admin')

@push('head-link')
  <link href="/css/admin/users/profile.css" rel="stylesheet">
@endpush

@php
  $lastCompletedQuiz = $user->getLastCompletedQuiz();
  $userSizes = $lastCompletedQuiz->userSizes;
  $userPreferredBodyParts = $lastCompletedQuiz->userPreferredBodyParts;
  $userFit = $lastCompletedQuiz->userFit;
  $userStyle = $lastCompletedQuiz->userStyle;
@endphp

@section('content')
  <div class="container-fluid" id="admin-user-profile">
    <div class="row">
      <div class="col-sm-5">
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
        <div class="grid-list grid-list-3 products-list">
          @foreach ($user->products as $product)
            <a href="{{ route('admin.products.show', ['product' => $product->id]) }}" class="grid-list-item product-item">
              <div>
                <div class="img-wrapper"><img src="{{ $product->files->first()->file_src }}" alt="{{ $product->files->first() }}"></div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
      <div class="col-sm-7">
        <div class="card">
          <small class="card-block-title">Acciones</small>
          <div class="card-block">
            <nav class="user-resources-nav"> </nav>
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Cuestionarios ({{ $user->quizzes->count() }})</small>
          <div class="card-block card-block-scroll">
            @foreach ($user->quizzes as $quiz)
              <ul class="user-details-list">
                <li><strong>ID:</strong><span>{{ $quiz->id }}</span></li>
                <li><strong>Tipo:</strong><span>{{ $quiz->outfitType->value }}</span></li>
                <li><strong>Status:</strong><span>{{ $quiz->status() }}</span></li>
                <li><strong>Fecha de comienzo:</strong><span>{{ $quiz->startedAt() }}</span></li>
              </ul>
            @endforeach
          </div>
        </div>
        <div class="card">
          <small class="card-block-title">Viendo resultados del último cuestionario</small>
          <div class="card-block">
            <ul class="user-details-list">
              <li><strong>ID:</strong><span>{{ $lastCompletedQuiz->id }}</span></li>
              <li><strong>Tipo:</strong><span>{{ $lastCompletedQuiz->outfitType->value }}</span></li>
              <li><strong>Status:</strong><span>{{ $lastCompletedQuiz->status() }}</span></li>
              <li><strong>Fecha de comienzo:</strong><span>{{ $lastCompletedQuiz->startedAt() }}</span></li>
              <li><strong>Fecha de finalización:</strong><span>{{ $lastCompletedQuiz->completedAt() }}</span></li>
              <li><strong>Tiempo total de finalización:</strong><span>{{ $lastCompletedQuiz->totalCompletionTime() }}</span></li>
            </ul>
            @if ($lastCompletedQuiz->outfit_type == \App\Model\Outfit\OutfitTypeAdapter::WORK)
              <hr>
              <ul class="user-details-list">
                <li><strong>Dress Code:</strong><span>{{ $lastCompletedQuiz->work->dressCode() }}</span></li>
              </ul>
            @endif
            @if ($lastCompletedQuiz->outfit_type == \App\Model\Outfit\OutfitTypeAdapter::GET_AWAY)
              <hr>
              <ul class="user-details-list">
                <li><strong>Destino:</strong><span>{{ $lastCompletedQuiz->getAway->destination() }}</span></li>
                <li><strong>Destino:</strong><span>{{ $lastCompletedQuiz->getAway->tripType() }}</span></li>
                @if ($lastCompletedQuiz->getAway->destination == \App\Model\Quiz\GetAway\Destination::CITY)
                  <li><strong>Clima:</strong><span>{{ $lastCompletedQuiz->getAway->weather() }}</span></li>
                @endif
              </ul>
            @endif
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
                <span>{{ $lastCompletedQuiz ? $userFit->upperPartFit->value : null }}</span>
              </li>
              <li>
                <strong>Parte inferior:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->lowerPartFit->value : null }}</span>
              </li>
              <li>
                <strong>Pantalones cadera:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->pantsFitHips->value : null }}</span>
              </li>
              <li>
                <strong>Pantalones forma:</strong>
                <span>{{ $lastCompletedQuiz ? $userFit->pantsFitShape->value : null }}</span>
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
                <span>{{ $lastCompletedQuiz ? $userStyle->colors() : '' }}</span>
              </li>
              <li>
                <strong>Estampados:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->prints() : '' }}</span>
              </li>
              <li>
                <strong>Telas:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->fabrics() : '' }}</span>
              </li>
              <li>
                <strong>Palabras:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->words() : '' }}</span>
              </li>
              {{-- <li>
                <strong>Prendas:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->clothes() : '' }}</span>
              </li>
              <li>
                <strong>Accesorios:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->accessories() : '' }}</span>
              </li> --}}
              {{-- <li>
                <strong>Zapatos:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->shoes() : '' }}</span>
              </li> --}}
              <li>
                <strong>Joyas:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->jewelry() : '' }}</span>
              </li>
              {{-- <li>
                <strong>Riesgo:</strong>
                <span>{{ $lastCompletedQuiz ? $userStyle->risk() : '' }}</span>
              </li> --}}
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
    </div>
  </div>
@endsection
