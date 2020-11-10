<?php
include("vues/v_sommaire_c.php");

$idComptable = $_SESSION['idVisiteur'];

$mois = $_SESSION['mois'];


$etp = $_POST['ETP'];
$km = $_POST['KM'];
$nui = $_POST['NUI'];
$rep = $_POST['REP'];
$pdo->changer($_SESSION['idVisiteur'], $mois, $etp, $km, $nui, $rep);
$listefrais = $pdo->afficherForFait($_SESSION['idVisiteur'], $mois);
            
include("vues/v_lista_Frais.php");
        

?>