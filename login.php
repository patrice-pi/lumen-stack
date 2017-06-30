<?php
include("header.php");
?>

<div class="container">
  <div class="row text-center">
    <div class="col-md-offset-3 col-md-6">
      <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Connexion</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>
      <br/>
      <a href="#">Pas encore inscrit ?</a>
      <br/>
      <a href="#">Mot de passe oublié ?</a>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>
