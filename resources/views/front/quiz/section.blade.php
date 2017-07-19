@extends('layouts.quiz')

@section('head-link')
  <link href="/css/front/quiz/section.css" rel="stylesheet">
@endsection

@section('content')

  @include("front/sections/{$section->getSlug()}", ['section' => $section])

@endsection