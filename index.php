<?php
include("header.php");
?>

  <nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Courir à Lyon</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <header class="jumbotron">
    <div class="container">
      <img src="images/logo.png" />
      <p>La communauté sportive lyonnaise gratuite et conviviale</p>
      <p><a class="btn btn-primary btn-md" href="#" role="button">En savoir +</a></p>
    </div>
  </header>

  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h1>Courir à Lyon - La communauté sportive gratuite et conviviale</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        <div class="col-md-3">
          <?php
            require("sidebar.php");
          ?>
        </div>
      </div>
    </div>
  </section>

<?php
  include("footer.php");
?>
