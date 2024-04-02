<?php
require_once "../config.php";
require_once '../model/bronxModel.php';

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}    

$program = getProgInfo($db);

if(isset($_GET["lang"])) {
    switch($_GET["lang"]){
        case 'en' :
            $linkHome = "HOME";
            $linkProg = "PROGRAM";
            $linkStud = "STUDIO";
            $linkScho = "SCHOOLS";
            $linkHous = "OPEN HOUSE";
            $linkInfo = "ABOUT US";
            break;
        case 'nl' :
            $linkHome = "THUIS";
            $linkProg = "PROGRAMMA";
            $linkStud = "STUDIO";
            $linkScho = "SCHOLEN";
            $linkHous = "OPEN HUIS";
            $linkInfo = "OVER ONS";
            break;
        case 'fr' :
            $linkHome = "ACCUEIL";
            $linkProg = "PROGRAMME";
            $linkStud = "STUDIO";
            $linkScho = "ÉCOLES";
            $linkHous = "PORTES OUVERTS";
            $linkInfo = "À PROPOS DE NOUS";
            break;
            default :
            $linkHome = "ACCUEIL";
            $linkProg = "PROGRAMME";
            $linkStud = "STUDIO";
            $linkScho = "ÉCOLES";
            $linkHous = "PORTES OUVERTS";
            $linkInfo = "À PROPOS DE NOUS";
    }
}else {
    $linkHome = "ACCUEIL";
    $linkProg = "PROGRAMME";
    $linkStud = "STUDIO";
    $linkScho = "ÉCOLES";
    $linkHous = "PORTES OUVERTS";
    $linkInfo = "À PROPOS DE NOUS";
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
                $title = "Inscrivez-Vous";
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
    }else if (isset($_GET["showPro"])) {
        $title = "Bronks Programme";
        include("../view/bronxProgView.php");
    }else{
    $title = "Page d'Accueil";
    include("../view/bronxHomeView.php");
}
