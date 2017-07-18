@extends('layouts.quiz')

@section('head-link')
  <link href="/css/front/quiz/new.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container" id="front-quiz-new">

    <form action="{{ $form->getOnPostActionString() }}" method="POST" id="outfit-type-form">
      {{ csrf_field() }}

      @include('fields.radio', ['field' => $form->getField('outfit_type')])
      @include('fields.text', ['field' => $form->getField('email')])

      <button type="submit" class="btn btn-primary btn-lg">Continuar</button>
    </form>

  </div>
@endsection
