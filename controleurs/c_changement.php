<?php
include("vues/v_sommaire_c.php");

$idComptable = $_SESSION['idVisiteur'];

$mois = $_SESSION['mois'];


$action = $_REQUEST['action'];



switch ($action) {
    case 'changer':
        
        $listefrais = $pdo->afficherForFait($_SESSION['idVisiteur'], $mois);
        
        include("vues/v_changer.php");
        break;

    case 'guardar':
        
        $etp = $_POST['ETP'];
        $km = $_POST['KM'];
        $nui = $_POST['NUI'];
        $rep = $_POST['REP'];
        $pdo->setETP($_SESSION['idVisiteur'], $mois, $etp);
        $pdo->setKM($_SESSION['idVisiteur'], $mois, $km);
        $pdo->setNUI($_SESSION['idVisiteur'], $mois, $nui);
        $pdo->setREP($_SESSION['idVisiteur'], $mois, $rep);
        $total = $_POST['suma'];
        $listefrais = $pdo->afficherForFait($_SESSION['idVisiteur'], $mois);
        $listeHorsFrais = $pdo->afficherHors($_SESSION['idVisiteur'], $mois);
        include("vues/v_lista_Frais.php");
        break;
    
    default:
        # code...
        break;
}

?>