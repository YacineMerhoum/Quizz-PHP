<?php 
session_start();

if(!empty($_POST["pseudo"])){


require_once "../config/connexion.php";

$preparedRequest = $connexion->prepare(
    "SELECT * FROM `user` WHERE `pseudo` = ?"

);
$preparedRequest->execute([$_POST["pseudo"]]);
$user = $preparedRequest->fetch(PDO::FETCH_ASSOC);

// if($user){
//     $_SESSION["id"] = $user["id"];
// } else {
//     header("")
// }



$_SESSION["id"] = $user["id"];
$_SESSION["pseudo"] = $_POST["pseudo"];

$_SESSION["point"] = 0;
$_SESSION["countquestion"] = 0;




header("Location: ../index2.php");
} else {
    header("Location: ../index.php?error=T'es con ou quoi ? Il faut que tu écrives ton pseudo");
}




    
        




