@extends('partials.app')
@section('content')

<main>

  <section class="vault">

        <div class="form__title-container">
          <h1 class="form__title">Liste des personnes</h1>
        </div>


        {{$users}}
  </section>
</main>

@endsection
