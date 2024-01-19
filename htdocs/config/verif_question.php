<?php
session_start();
require_once "./connexion.php";

$preparedRequest = $connexion->prepare(
    "SELECT `id_questions`,`good_ans` FROM `choices` WHERE answer = ?"
);
$preparedRequest->execute([
    $_POST["choices"]]
);
$choices = $preparedRequest->fetch(PDO::FETCH_ASSOC);


$_SESSION["countquestion"]++;



if ($choices && $choices ["good_ans"] == true) {
    // si c'est vrai je change de question 
    $_SESSION["point"] = $_SESSION["point"] + 1;

//      
        if ($_SESSION["countquestion"] === 10){
            header("Location: ../result.php");
            exit();
        }else{
            header("location: ../question.php?success=Bonne réponse mon pote");
         exit();
}}    
    
    
    
else {
    
    header("location: ../question.php?error=Mauvaise réponse mec , tu crains");
    exit();
}
