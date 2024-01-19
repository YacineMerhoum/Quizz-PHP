<?php

if (!empty($_POST["create"])){

    require_once "./connexion.php";
    $preparedRequest = $connexion->prepare(
        "INSERT INTO user (pseudo) VALUES (?)"
    );

    $preparedRequest->execute([
        $_POST["create"]
    ]);



    header("Location: ../index.php?success=Votre compte a été crée avec succès , connectez-vous maintenant !");
    
    }else{

    header("Location: ../index.php?error=T'as chi** dedans gros! Abuse pas ecris au moins un truc");
    }






