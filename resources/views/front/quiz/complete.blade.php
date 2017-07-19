@extends('layouts.quiz')

@section('head-link')
  <link href="/css/front/quiz/section.css" rel="stylesheet">
@endsection

@section('content')
  <div class="container" id="front-quiz-new">
    <section class="section">
      <header class="section-header"></header>
      <div class="section-content">
        <div class="container-md">
          <h1>Has terminado el cuestionario</h1>
          <h2>Asegúrate de verificar tu correo electrónico para que podamos contactarte</h2>
          <h5>Si no lo has recibido revisa tu bandeja de correo no deseado ó da clic en</h5>
          <form action="">
            <button type="submit" class="btn btn-info btn-lg">Reenviar correo</button>
          </form>
          <hr>
          <h3>Comparte este link con tus amigos y obtén descuentos en tus compras</h3>
          <fieldset class="form-group">
            <input type="text" class="form-control form-control-lg" value="URL">
          </fieldset>
          <p>* El descuento es válido sólo hasta que los usuarios que referiste realicen una compra</p>
        </div>
      </div>
      <footer class="section-footer"></footer>
    </section>

  </div>
@endsection
