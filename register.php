<?php
include("header.php");
?>

<section id="register">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <form class="form-register" method="POST" action="">
          <h2 class="form-register-heading text-center">Inscription</h2>

          <label for="pseudo" class="sr-only">Pseudo</label>
          <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Pseudo*" required>

          <label for="mail1" class="sr-only">Email</label>
          <input type="email" id="mail1" name="mail1" class="form-control" placeholder="Adresse email*" required>

          <label for="mail2" class="sr-only">Confirmation de l'e-mail</label>
          <input type="email" id="mail2" name="mail2" class="form-control" placeholder="Confirmez votre adresse mail*" required>

          <label for="mdp1" class="sr-only">Mot de passe</label>
          <input type="password" id="mdp1" name="mdp1" class="form-control" placeholder="Mot de passe*" required>

          <label for="md2" class="sr-only">Confirmation du mot de passe</label>
          <input type="password" id="md2" name="mdp2" class="form-control" placeholder="Confirmez votre mot de passe*" required>

          <ul class="list_competence">
            <li><input type="checkbox" value="html5"> HTML5</li>
            <li><input type="checkbox" value="css3"> CSS3</li>
            <li><input type="checkbox" value="javascript"> JAVASCRIPT</li>
            <li><input type="checkbox" value="jquery"> JQuery</li>
            <li><input type="checkbox" value="php"> PHP</li>
            <li><input type="checkbox" value="sql"> SQL</li>
            <li><input type="checkbox" value="ajax"> AJAX</li>
            <br/>
            <li><input type="checkbox" value=""> Others</li>
            <input type="text" id="other" name="other" placeholder="Entrez votre compétence">
          </ul>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
