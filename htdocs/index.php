<?php
session_start();
require_once "./config/connexion.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz de Yizzy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <header>
        <div class="container text-center mt-5">
            <div class="row align-items-start">
                <div class="col-3">

                </div>
                <div class="col-6">
                    <h1 class="animate-title">Quizz de Yizzy</h1>
                </div>
                <?php

                if (isset($_GET['success'])) {
                    $successMessage = $_GET['success'];
                    
                    echo '<h2 class="text-center text-warning ">' . htmlspecialchars($successMessage) . '</h2>';
                
                }else if (isset($_GET['error'])) {
                       $errorMessage = $_GET['error'];
                        
                        echo '<h2 class="text-center text-danger error ">' . htmlspecialchars($errorMessage) . '</h2>';



                } 
                ?>





                <div class="col-3">

                </div>
            </div>
        </div>
    </header>

    <div class="container  mt-5">

        <div class="row align-items-start inputs">
            <div class="col-5">
                <h2>Connectez-vous</h2>
                <div class="input-group mb-3">
                    <form action="./config/login.php" method="post">
                        <input type="text" class="form-control " name="pseudo" placeholder="Ton blaz stp">
                        <button class="btn btn-outline-secondary zoom-button3 " type="submit">Let's Go</button>
                    </form>
                </div>

            </div>
            <div class="col-2 ">

            </div>
            <div class="col-5">
                <h2>Création de compte</h2>
                <div class="input-group mb-3">
                    <form action="./config/add_newuser.php" method="post">
                        <input type="text" name="create" class="form-control" placeholder="Votre pseudo" aria-label="Recipient's username" aria-describedby="button-addon2">

                        <button class="btn btn-outline-secondary zoom-button3 " type="submit">Création</button>
                </div>
                </form>

            </div>
            <div class="text-center">
                <i class="animation fa-solid fa-ghost fa-spin fa-10x" style="color: #ff7800;"></i>
            </div>




















            <script src="./style/anim.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/23471b5a81.js" crossorigin="anonymous"></script>
</body>

</html>