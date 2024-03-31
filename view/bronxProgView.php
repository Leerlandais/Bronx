<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
<div class="global">
  

<?php
    require_once ("inc/headerView.php");
    require_once ("inc/altNavBarView.php");
    ?>
 <div class="progHolder">
    <?php
if (isset($_GET["p"]) && $_GET["p"] == "program") {
    foreach ($program as $prog) :
    ?> <div class="progWindow">
        <div class="innerProgWindow">
            <img src="<?=$prog["sm_img_src"]?>" alt="<?=$prog["slug"]?>">
            <div class="progInfo">
            <a href="?showPro=<?=$prog["slug"]?>"><h2><?=$prog["title"]?></h2></a>
            <p><?=substr($prog["description"], 0, 50);?></p>
            <p><?=$prog["date"];?></p>
        </div>
        </div>
    </div>
    <?php endforeach;
}else if (isset($_GET["showPro"])) { 
    foreach($program as $prog) :
    if ($_GET["showPro"] == $prog["slug"]) {
    ?>
    <div class="fullProg">
        <img src="<?=$prog["img_src"]?>" alt="<?=$prog["slug"]?>" class="limitOnSmall">
        <div class="progInfo">
        <h2><?=$prog["title"]?></h2>
        <p class="progDesc"><?=$prog["description"];?></p>
        <a href="?p=program" class="backProg">Retour</a>
    </div>
    </div>
    </div>
    <?php 
    }
    endforeach;
} ?></div> <?php
    require_once ("inc/newsPartnerView.php");
    require_once ("inc/footerView.php");
?>

<h6 id="screenwidth"></h6>
</div> <!-- end global -->
<script src="scripts/script.js"></script>
</body>
</html>



