<?php
require_once "./connexion.php";


$preparedRequest = $connexion->prepare(
    "SELECT *
    FROM questions
    INNER JOIN choices 
    ON questions.question = choices.answer;"
);

$preparedRequest->execute();
$question = $preparedRequest->fetch();