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
    <?php
    foreach ($program as $prog) {
    if (isset($_GET["p"]) && $_GET["p"] == "program") {
    ?>    
        <div>
            <a href="?showPro=<?=$prog["slug"]?>"><h2><?=$prog["title"]?></h2></a>
            <img src="<?=$prog["sm_img_src"]?>" alt="<?=$prog["slug"]?>">
            <p><?=substr($prog["description"], 0, 50);?></p>
        </div>
    <?php
}else if (isset($_GET["showPro"]) && $_GET["showPro"] == $prog["slug"]) { ?>
    <div>
        <a href="?showPro=<?=$prog["slug"]?>"><h2><?=$prog["title"]?></h2></a>
        <img src="<?=$prog["img_src"]?>" alt="<?=$prog["slug"]?>">
        <p><?=$prog["description"];?></p>
    </div>
    
    <?php 
}
} 
    require_once ("inc/newsPartnerView.php");
    require_once ("inc/footerView.php");
?>
<h6 id="screenwidth"></h6>
</div> <!-- end global -->
<script src="scripts/script.js"></script>
</body>
</html>