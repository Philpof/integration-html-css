<!DOCTYPE html>
<html lang="en" dir="ltr"><!-- "ltr" veut dire "Left To Right", c'est le sens de lecture -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- "viewport" est utile pour adapter la page aux différents formats d'écran -->
  <meta name="author" content="Philippe PERECHODOV">
  <title>Présentation HTML & CSS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><!-- TOUJOURS mettre le link bootstrap avant le main.css car s'il y a des similitude alors c'est le denrier qui s'applique donc ce sera main.css (ce qu'on a fait) -->
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <!-- Code de "navbar" pris sur bootstrap -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light"><!-- on utilise "class" et pas "style" ! -->
    <a class="navbar-brand" target="_blank" href="https://www.accesscodeschool.fr/"><img src="img/logo-acs-black.png" alt="logo access code school" id="logo-acs"></a><!-- le "alt" est à remplir clairement car c'est ce qui sera lu par les bots ou par les logiciels pour malvoyant par exemple -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="html.php">HTML</a> <!-- On peut rajouter target="_blank" dans le <a> pour que le lien ouvre une nouvelle page -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="css.php">CSS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="console.php">Command Line</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="git.php">Git & GitHub</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="atom.php">Atom</a>
        </li>
      </ul>
    </div>
  </nav>
