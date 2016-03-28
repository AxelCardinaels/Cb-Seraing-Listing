@extends('partials.app')
@section('content')

<main>

  <section class="login wrapper--login">
    <div class="form__title-container title--login">
      <h1 class="form__title">Accès à l'administration</h1>
      <p class="form__subtitle">Tu ne devrais pas être ici petit chat.</p>
    </div>

    @include('admin.forms.login')


    @if (Auth::check())
  logged
 @else
  not logged
  @endif
  </section>

</main>

@endsection
