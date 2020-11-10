<?php
include("vues/v_sommaire_c.php");

$idComptable = $_SESSION['idVisiteur'];
$visiteur = $_POST['mois'];
$_SESSION['idVisiteur'] = $visiteur;

$action = $_REQUEST['action'];



switch ($action) {
    case 'listeMois':
        
        $listeMois = $pdo->afficherMois($visiteur);
        include("vues/v_verMes.php");
        break;
    
    default:
        # code...
        break;
}

?>