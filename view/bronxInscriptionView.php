<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
<div class="global">

<?php
    require_once ("inc/headerView.php");
 //   require_once ("inc/altNavBarView.php");
    ?>
    <div class="formHolder">
    <h2>INSCRIPTION</h2>
    <form action="" class="inscForm">
        <label for="">E-MAIL * </label>
        <div class="formDiv">
            <input type="text" name="" id="">
        </div>
        <div class="reallyAnnoyingMe">
    <div class="annoyingMe annoyingMeMore">
        <label for="">NOM * </label>
        <div class="formDiv">
            <input type="text" name="" id="">
        </div></div>    
        <div class="annoyingMe">
        <label for="">PRÉNOM *  </label>
        <div class="formDiv">
           <input type="text" name="" id="">        
        </div>
        </div>
        </div>
        <label for="">ADRESSE *  </label>
        <div class="formDiv">
           <input type="text" name="" id="">
        </div>
        <div class="formDiv">
            <button type="submit" class="inscButton">ENVOYER</button>
        </div>
    </form>
    </div>
    <?php
    require_once ("inc/altNewsPartnerView.php");
    require_once ("inc/footerView.php");
?>  

</div> <!-- end global -->
<script src="scripts/script.js"></script>
</body>
</html>