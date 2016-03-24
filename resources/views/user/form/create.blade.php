<div class="form__create">

        <form role="form" method="POST" action="">
            {!! csrf_field() !!}
              <input type="text" class="form__input register__input" name="prenom" id="prenom" placeholder="Ton prénom">
              <input type="text" class="form__input register__input" name="nom" id="nom" placeholder="Ton nom">
              <input type="text" class="form__input register__input" name="telephone" id="telephone" placeholder="Ton numéro de téléphone">
              <input type="text" class="form__input register__input" name="email" id="email" placeholder="Ton email">
              <button type="submit" class="form__bouton bouton__create">
                Envoyer mes informations
              </button>
        </form>
</div>
