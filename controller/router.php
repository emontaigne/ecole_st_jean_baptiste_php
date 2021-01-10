<?php 
    if(isset($_GET["section"]))
    {
        switch ($_GET["section"]) {
            case 'accueil':
                require_once("controller/event/accueilController.php");
                break;
            case 'info':
                require_once("controller/infoController.php");
                break;
            case 'contact':
                require_once("controller/contactController.php");
                break;
            case 'admin':
                    require_once("controller/adminController.php");
                    break;
            case 'parents':
                    require_once("controller/parentsController.php");
                    break;
            case 'covid':
                    require_once("controller/covidController.php");
                    break;
            case 'apropos':
                    require_once("controller/aproposController.php");
                break;
            case 'histoire':
                    require_once("controller/histoireController.php");
                break;
            case 'motdirection':
                    require_once("controller/motdirectionController.php");
                break;
            case 'roi':
                    require_once("controller/roiController.php");
                break;
            case 'ephemerides':
                    require_once("controller/ephemeridesController.php");
                break;
            case 'activites':
                    require_once("controller/activitesController.php");
                break;
                case 'service-garderie':
                    require_once("controller/service-garderieController.php");
                break;
                case 'service-traiteur':
                    require_once("controller/service-traiteurController.php");
                break;
            case 'garderie':
                    require_once("controller/garderieController.php");
                break;
            case 'traiteur':
                    require_once("controller/traiteurController.php");
                break;
            case 'galerie':
                    require_once("controller/galerieController.php");
                break;
                case 'repas':
                    require_once("controller/repasController.php");
                break;
            case 'connexion':
                require_once("controller/connexionController.php");
                break;
            case 'deconnexion':
                require_once("controller/deconnexionController.php");
                break;
            case 'compteBloque':
                require_once("view/error/compteBloque.php");
                break;
            case "create":
                    require_once("controller/personne/create.php");
                break;
             case "read":
                    require_once("controller/personne/read.php");
                break;
            case "update":
                    require_once("controller/personne/update.php");
                break;
            case "delete":
                    require_once("controller/personne/delete.php");
                break;
                case "create_event":
                    require_once("controller/event/create_event.php");
                break;
             case "read_event":
                    require_once("controller/event/read_event.php");
                break;
            case "update_event":
                    require_once("controller/event/update_event.php");
                break;
            case "delete_event":
                    require_once("controller/event/delete_event.php");
                break;
                case "ajax":
                    require_once("controller/ajax/ajax.php");
                break;
                case "read_ajax":
                    require_once("controller/ajax/read_ajax.php");
                break;
                case "update_ajax":
                    require_once("controller/ajax/update_ajax.php");
                break;
                case "adminController":
                    require_once("controller/personne/adminController.php");
                break;
                case "accueilController":
                    require_once("controller/event/accueilController.php");
                break;

            default:
            require_once("view/error/404.php");
                break;
        }
    }
    else
    {
        require_once("view/page/accueil.php");
    }
?>