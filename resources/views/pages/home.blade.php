@extends('partials.app')
@section('content')

<main>

  <section class="home">
    <div class="picture">
      <span class="hide">Image d'illustration du listing</span>
    </div>

    <div class="container">
      <div class="container__form">
        <div class="form__title">
          <h1 class="title">Mise à jour du listing du Comité</h1>
          <p class="subtitle">Pour une communication plus simple et éfficace à l'avenir</p>
        </div>

        @include('user.form.create')


      </div>

    </div>
  </section>
</main>

@endsection
