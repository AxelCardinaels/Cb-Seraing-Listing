<div class="form__create">

  @if (count($errors) > 0)
<div class="form__error-container">
  <p class="error__message">Oups, il y a {{count($errors)}} erreur(s) dans le formulaire !</p>
  <ul class="error__list">
      @foreach ($errors->all() as $error)
          <li class="error__item">{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif

        <form role="form" method="POST" action="{{ route('user.store')}}">
            {!! csrf_field() !!}
              <input type="text" class="form__input register__input" name="prenom" id="prenom" placeholder="Ton prénom" value="{{ old('prenom') }}">
              <input type="text" class="form__input register__input" name="nom" id="nom" placeholder="Ton nom" value="{{ old('nom') }}">
              <input type="text" class="form__input register__input" name="telephone" id="telephone" placeholder="Ton numéro de téléphone" value="{{ old('telephone') }}">
              <input type="text" class="form__input register__input" name="email" id="email" placeholder="Ton email" value="{{ old('email') }}">
              <select class="form__input register__input" name="grade" id="grade">
                <option selected disabled>Je suis...</option>
                <option value="baptisé">Baptisé</option>
                <option value="assistant">Assistant</option>
                <option value="capé">Capé</option>
                <option value="ancien">Ancien</option>
              </select>

              <button type="submit" class="form__bouton bouton__create">
                Envoyer mes informations
              </button>
        </form>
</div>
