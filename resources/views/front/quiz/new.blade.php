@extends('layouts.quiz')

@push('head-link')
<link href="/css/front/quiz/new.css" rel="stylesheet">
@endpush

@section('content')
  <form action="{{ $form->getOnPostActionString() }}" method="POST" id="outfit-type-form">
    {{ csrf_field() }}

    <section class="section" id="front-quiz-new">
      <header class="section-header"></header>
      <div class="section-content">
        <div class="container">

          @if ($userHasPendingQuiz)
            <div class="ebm-alert ebm-alert-info">
              <div class="alert-left"><i class="icon-fingers-victory"></i></div>
              <div class="alert-right">
                <div class="alert-content">
                  <h5>Ya habías comenzado un cuestionario. Puedes terminarlo o empezar otro <i class="icon-smile"></i></h5>
                </div>
                <div class="alert-footer">
                  <a href="{{ $sectionRoute }}" class="btn btn-info">Continuar</a>
                </div>
              </div>
            </div>
            <hr>
          @endif


          @include('fields.radio', ['field' => $form->getField('outfit_type')])

          @if (!Auth::check())
            @include('fields.text', ['field' => $form->getField('email')])
          @endif

        </div>
      </div>
      <footer class="section-footer">
        <div class="container">
          <button type="submit" class="btn btn-primary btn-lg">Comenzar</button>
        </div>
      </footer>
    </section>
  </form>
@endsection
