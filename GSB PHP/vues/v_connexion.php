<div id="contenu">
  <center>
    <fieldset id="connexion">
      <!-- <h2>Identification utilisateur</h2>-->
      <legend>Identification utilisateur</legend>

        <form method="POST" action="index.php?uc=connexion&action=valideConnexion">   
            <p>
              <label for="nom">Login* : </label>
              <input type="text" name="login"  size="30" maxlength="45">
            </p>

            <p>
              <label for="mdp">Mot de passe* : </label>
              <input type="password"  name="mdp" size="30" maxlength="45">
            </p>
            
            <p class="boutton">
              <input type="submit" value="Valider" name="valider" id="v">
              <input type="reset" value="Annuler" name="annuler" id="a"> 
            </p>
        </form>
    </fieldset>
  </center>
