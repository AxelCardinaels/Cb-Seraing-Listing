@extends('partials.app')
@section('content')

<main>

  <section class="vault wrapper--section">

        <div class="form__title-container">
          <h1 class="form__title">Toutes les entrées</h1>
          <p class=form__subtitle>Tous - <a href="{{route('unsigned')}}" alt="afficher toutes les entrées non traitées">Non traitées</a></p>
          {{$items}}
        </div>

  </section>
</main>

@endsection
