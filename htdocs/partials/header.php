<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz de Yizzy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">

</head>
<body onload="setTimeout(function(){ document.body.innerHTML = ''}, 10000)">
<nav class="navbar navbar-expand-lg  bgnav">
  <div class="container-fluid">
    <a class="animnav navbar-brand text-light fs-2" href="../index.php">Quizz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="animnav nav-link active text-light fs-2" aria-current="page" href="../index2.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="animnav nav-link text-light fs-2" href="../config/logout.php">Déconnexion</a>
        </li>
        <li class="nav-item  login">
        <?php if (!empty($_SESSION["pseudo"])) {
  echo '<p class="text-success fs-3">' . "T'ES UN CRACK , je crois en toi " .  $_SESSION["pseudo"]  . " " .
  "<i class='fa-solid fa-face-smile ' style='color: #FFD43B;'></i>" . '</p>';
} else {
  // Afficher autre chose ou ne rien afficher si la session n'est pas ouverte
  echo '<p class="text-danger fs-3">Utilisateur non-connecté</p>';
}; ?>
</p></li>

        
      </ul>
    </div>
  </div>
</nav>
    <header>
    <div class="container text-center mt-5">
  <div class="row align-items-start">
    <div class="col-3">
      
    </div>
    <div class="col-6">
    <h1>Quizz de Yizzy</h1>
    </div>
    <div class="col-3">
      
    </div>
  </div>
</div>
</header>



