@extends('layouts.quiz')

@push('head-link')
  <link href="/css/front/quiz/section.css" rel="stylesheet">
@endpush

@section('content')

  @include("front/sections/{$section->getTemplate()}", ['section' => $section])

@endsection
