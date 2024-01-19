<?php
session_start();
require_once "./config/connexion.php";


?>

<?php include "./partials/header.php" ?>

<div class="text-center mt-5">
    <h2>Bienvenue sur notre site </h2>
    <p>

<?php if (!empty($_SESSION["pseudo"])) {
  echo '<p class="text-success fs-1">' .  $_SESSION["pseudo"] . " " .
  "<i class='fa-solid fa-face-smile ' style='color: #FFD43B;'></i>" . '</p>';
} else {
  // Afficher autre chose ou ne rien afficher si la session n'est pas ouverte
  echo '<p class="text-danger fs-3">Utilisateur non-connecté</p>';
}; ?>
</p>

    <br><i class="mt-4 fa-solid fa-question fa-bounce fa-10x" style="color: #ffffff;"></i>
</div>



<div class="text-center">
    <h2>Pour commencer le questionaire<br>
Cliquez sur le bouton si-dessous </h2>
<br>
<a href="./question.php"><button type="button" class="zoom-button2 btn btn-secondary btn-lg button">
    Commencer <br> le quizz</button></a>
</div>
<br>






















<?php include "./partials/footer.php" ?>