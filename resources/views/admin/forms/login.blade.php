<div class="form__login">

  @if (count($errors) > 0)
<div class="form__message-container message--error">
  <p class="error__message">Oups, il y a {{count($errors)}} erreur(s) dans le formulaire !</p>
  <ul class="error__list">
      @foreach ($errors->all() as $error)
          <li class="error__item">{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif

@if (session('status'))
    <div class="form__message-container message--success">
        <p class="success__message">{{ session('status') }}</p>
    </div>
@endif

        <form role="form" method="POST" action="{{ route('authenticate')}}">
            {!! csrf_field() !!}
              <input type="text" class="form__input register__input" name="email" id="email" placeholder="Ton email" value="{{ old('email') }}">
              <input type="password" class="form__input register__input" name="password" id="password" placeholder="Ton mot de passe" value="{{ old('password') }}">

              <button type="submit" class="form__bouton bouton__create">
                Se connecter
              </button>
        </form>
</div>
