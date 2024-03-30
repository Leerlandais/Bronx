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
    foreach ($program as $prog) :
    ?>    
        <div>
            <p><?=substr($prog["description"], 50);?></p>
            <img src="<?=$prog["img_src"]?>" alt="">
            <h2>FOR TOMORROW - Page Layout, Img size, complete DB</h2>
        </div>
    <?php
    endforeach;
    ?>
    <?php 
    require_once ("inc/newsPartnerView.php");
    require_once ("inc/footerView.php");
?>
<h6 id="screenwidth"></h6>
</div> <!-- end global -->
<script src="scripts/script.js"></script>
</body>
</html>