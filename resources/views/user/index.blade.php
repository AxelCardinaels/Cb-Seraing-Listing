@extends('partials.app')
@section('content')

<main>

  <section class="vault wrapper--section">

        <div class="form__title-container">
          <h1 class="form__title">Toutes les entrées</h1>
          <p class=form__subtitle>Tous - <a href="{{route('unsigned')}}" alt="afficher toutes les entrées non traitées">Non traitées</a></p>
        </div>

        <div class="vault__table-container">
          <p class="vault__total"><span>{{$items->count()}}</span> au total</p>
          <table class="vault__table">
            <tr class="table__header">
              <th>Prénom</th>
              <th>Nom</th>
              <th>Téléphone</th>
              <th>Email</th>
              <th>Grade</th>
              <th>Status</th>
            </tr>


          @foreach($items as $item)
            <tr class="table__loop">
              <th>{{$item->prenom}}</th>
              <th>{{$item->nom}}</th>
              <th>{{$item->telephone}}</th>
              <th>{{$item->email}}</th>
              <th>{{$item->grade}}</th>
              <th>{{$item->status}}</th>
            </tr>

            @endforeach


          </table>
        </div>

  </section>
</main>

@endsection
