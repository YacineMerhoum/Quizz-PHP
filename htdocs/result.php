<?php session_start(); ?>


<?php include "./partials/header2.php" ?>
<?php require_once "./config/connexion.php"; 

$insertscore = $connexion->prepare(
    "INSERT INTO score (score, user_id) VALUES (?,?)");
$insertscore->execute([

    $_SESSION['point'],
    $_SESSION['id']
    
]);

?>





<div class="text-center">
    <h1 class="animate-title mb-5">Voici tes résultats</h1>
    <br>
    <?php if ($_SESSION["point"] <= 5){
        echo "<h2 class='fs-1 text-danger '>Sah t'es une quiche lorraine, entraines-toi mec !
        <i class='fa-solid fa-face-laugh-squint' style='color: #FFD43B;'></i></h2>";
    } else {
        echo "<h2 class='fs-1 text-info '> Ouais pas mal mec ! </h2>";
    }?>
    <br>

    <div class="card container cards" style="width: 40rem;">
        <div class="card-body  d-flex align-items-center">

            <h2 class="card-title text-danger cardresult">
                <?php echo $_SESSION["pseudo"] ?></h2>
            <br>

            <p class="card-text text-info cardresult ms-5">
                <?php echo "Vous avez : " .  $_SESSION["point"] . " points" ?></p>

        </div>
        <br>
    </div>

</div>
<br><br>


<div class="text-center mt-5 fs-3 animnav"><a href="./index.php">Retour au menu</a></div>






















<?php include "./partials/footer.php" ?>