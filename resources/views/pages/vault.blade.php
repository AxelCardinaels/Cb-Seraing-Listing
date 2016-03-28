@extends('partials.app')
@section('content')

<main>

  <section class="vault wrapper--section">

        <div class="form__title-container">
          <h1 class="form__title">Dashboard</h1>
          <p class=form__subtitle><a href="{{route('index')}}" alt="afficher toutes les entrées">Tous</a> - <a href="{{route('unsigned')}}" alt="afficher toutes les entrées non traitées">Non traitées</a></p>
        </div>

  </section>
</main>

@endsection
