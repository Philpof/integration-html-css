<?php

include "header.php";

?>

<main>
<div class="container">
  <!-- Code de "jumbotron" pris sur bootstrap -->
  <div class="jumbotron">
    <h1 class="display-4">Bonjour à toutes et à tous !</h1>
    <p class="lead">Sur ce site, vous retrouverez toutes les informations utiles pour coder une page web.</p>
    <hr class="my-4">
    <p>Il s'améliorera et se complètera au fur et à mesure de ma formation.<br>
      Vous pouvez consulter mon GitHub si vous voulez.</p>
    <div class="text-center"><a class="btn btn-primary btn-lg" href="https://github.com/Philpof" role="button" target="_blank">Mon GitHub</a></div>
    <!-- Le "text-center" permet de centrer le texte mais ici le bouton -->
  </div>
  <!-- Code de "card" pris sur bootstrap -->
  <div class="row">
    <!-- Card n°1 -->
    <div class="col-sm d-flex justify-content-around">
      <div class="card" style="width: 15rem;">
        <img src="img/HTML5.png" class="card-img-top card-img-height" alt="logo HTML5">
        <div class="card-body">
          <h5 class="card-title">HTML</h5>
          <p class="card-text">Le HTML pour les nuls (ou presque) !</p>
          <a href="html.php" class="btn btn-primary">C'est par là !</a>
        </div>
      </div>
    </div>
    <!-- Card n°2 -->
    <div class="col-sm d-flex justify-content-around">
      <div class="card" style="width: 15rem;">
        <img src="img/CSS3.png" class="card-img-top card-img-height" alt="logo CSS3">
        <div class="card-body">
          <h5 class="card-title">CSS</h5>
          <p class="card-text">Le CCS c'est bien, en abuser, ça craind !</p>
          <a href="css.php" class="btn btn-primary">Allons-y !</a>
        </div>
      </div>
    </div>
    <!-- Card n°3 -->
    <div class="col-sm d-flex justify-content-around">
      <div class="card" style="width: 15rem;">
        <img src="img/console.png" class="card-img-top card-img-height" alt="image console">
        <div class="card-body">
          <h5 class="card-title">Command Line</h5>
          <p class="card-text">Quelle console ? PS4 ou XBOX ? ...ah, non rien à voir...</p>
          <a href="console.php" class="btn btn-primary">Suivre le lapin blanc</a>
        </div>
      </div>
    </div>
    <!-- Card n°4 -->
    <div class="col-sm d-flex justify-content-around">
      <div class="card" style="width: 15rem;">
        <img src="img/GitGitHub.jpeg" class="card-img-top card-img-height" alt="logo Git&GitHub">
        <div class="card-body">
          <h5 class="card-title">Git & GitHub</h5>
          <p class="card-text">Mon nouveau mailleur ami !</p>
          <a href="git.php" class="btn btn-primary">Go Go Git !</a>
        </div>
      </div>
    </div>
    <!-- Card n°5 -->
    <div class="col-sm d-flex justify-content-around">
      <div class="card" style="width: 15rem;">
        <img src="img/Atom.webp" class="card-img-top card-img-height" alt="logo Atom">
        <div class="card-body">
          <h5 class="card-title">Atom</h5>
          <p class="card-text">C'est une bombe !!! </p>
          <a href="atom.php" class="btn btn-primary">Boum !</a>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

  <?php

  include "footer.php";
