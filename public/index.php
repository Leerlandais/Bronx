<?php
require_once "../config.php";


try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    



if(isset($_GET["p"])){
    switch($_GET["p"]){
        case 'home':
            $title = "Page d'Accueil";
            include("../view/bronxHomeView.php");
            break;
            case 'huis':
                $title = "Open Huis";
            include("../view/bronxHuisView.php");
            break;
            case 'inscrire':
                $title = "Inscrirez-Vous";
            include("../view/bronxInscriptionView.php");
            break;
            case 'program':
                $title = "Bronks Programme";
            include("../view/bronxProgView.php");
            break;
            case 'studio':
                $title = "Bronks Studio";
            include("../view/bronxStudioView.php");
            break;
            case 'school':
                $title = "École Bronks";
            include("../view/bronxEcolesView.php");
            break;
            
                default:
                $title = "Page 404";
                include("../view/erreur404.php");
        }
}else{
    $title = "Page d'Accueil";
    include("../view/bronxHomeView.php");
}