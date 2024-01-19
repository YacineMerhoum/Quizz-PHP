<?php
session_start();
require_once "./config/connexion.php";
?>

<!-- // questions -->
<?php
require_once "./config/connexion.php";

$preparedRequest = $connexion->prepare(
    "SELECT * FROM `questions` ORDER BY RAND()
     LIMIT 1"
);
$preparedRequest->execute();
$question = $preparedRequest->fetch(PDO::FETCH_ASSOC);



?>


<!-- réponses -->
<?php
require_once "./config/connexion.php";

$preparedRequest = $connexion->prepare(
    "SELECT * FROM `choices` WHERE `id_questions` = ? ORDER BY RAND()"
);
// $preparedRequest->bindValue(':id', $questions[0]['id'], PDO::PARAM_INT); 
// 
$preparedRequest->execute([$question["id"]]);
$choices = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

// var_dump($choices);
?>




<!-- requete pour score  -->

<?php
require_once "./config/connexion.php";
$preparedRequest = $connexion->prepare(
    "SELECT `points` FROM `questions`"
);
$preparedRequest->execute();
$point = $preparedRequest->fetch(PDO::FETCH_ASSOC);
?>
<!-- requete pour score  -->



<!-- tentative d'accumulation de pts -->
<?php
require_once "./config/connexion.php";
$preparedRequest = $connexion->prepare(
    "UPDATE `questions` SET `points` = `points` + 1 WHERE `id` = `id` "
);
$preparedRequest->execute();
$displaypts = $preparedRequest->fetch(PDO::FETCH_ASSOC);
?>
<!-- tentative d'accumulation de pts -->

<?php include "./partials/header2.php"; ?>


<!-- <h2 class="text-center">Question numéro 1 </h2> -->


<p class="text-center  beat-element">Score : <?= $_SESSION["point"]?> </p>

<div id="countdown" class="text-center fs-3">

    Temps restant mec : <div><span class="time text-info fs-1"></span> secondes</div>

</div>


<?php if (!empty($_GET['success'])) { ?>
    <h2 class="text-center text-success"><?= $_GET['success'] ?>
        <i class="fa-regular fa-thumbs-up" style="color: #2ec27e;"></i>
    </h2>


<?php } else if (!empty($_GET['error'])) { ?>
    <h2 class="text-center text-danger"><?= $_GET['error'] ?>
        <i class="fa-solid fa-xmark" style="color: #e01b24;"></i>
    </h2>
<?php }

?>

<div class="text-center mt-5">

    <h1 class="animate-title"><?= $question["question"] ?></h1>


</div>

<div class="row justify-content-evenly marginbutton">
    <?php
    foreach ($choices as $choice) { ?>
        <div class="col-3 ">
            <form action="./config/verif_question.php" method="post">

                <input type="hidden" name="choices" value='<?= $choice["answer"] ?>'>

                <input type="hidden" name="id" value='<?= $choice["id"] ?>'>



                <button type="submit" id="button" class="btn btn-warning btn-lg zoom-button">
                    <?= $choice["answer"] ?>
                </button>
            </form>
        </div>

    <?php }
    ?>
</div>




<!-- <div class="circle"></div>
<svg>
  <filter id="wavy">
    <feTurbulence x="0" y="0" baseFrequency="0.009" numOctaves="5" speed="2">
      <animate attributeName="baseFrequency" dur="60s" values="0.02; 0.005; 0.02" repeatCount="indefinite">
    </feTurbulence>
    <feDisplacementMap in="SourceGraphic" scale="30"></feTurbulence>
  </filter>
</svg> -->






<?php include "./partials/footer.php" ?>