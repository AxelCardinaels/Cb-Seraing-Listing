@extends('partials.app')
@section('content')

<main>

  <section class="home">
    <div class="picture wrapper--image">
      <span class="hide">Image d'illustration du listing</span>
    </div>

    <div class="container wrapper--form wrapper--table">
      <div class="container__form">
        <div class="form__title-container">
          <h1 class="form__title">Mise à jour du listing du Comité</h1>
          <p class="form__subtitle">Pour une communication plus simple et efficace à l'avenir.</p>
        </div>



        @include('user.form.create')


      </div>

    </div>
  </section>
</main>

@endsection
