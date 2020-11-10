<?php
include("vues/v_sommaire_c.php");

$idComptable = $_SESSION['idVisiteur'];



$action = $_REQUEST['action'];



switch ($action) {
    case 'listeFrais':

        $mois = $_POST['pets'];
$_SESSION['mois'] = $mois;
        
        $listeRembourse = $pdo->getFraisHorsNonRefuse($idComptable);
        $listefrais = $pdo->afficherForFait($_SESSION['idVisiteur'], $mois);
        $listeHorsFrais = $pdo->afficherHors($_SESSION['idVisiteur'], $mois);
        include("vues/v_lista_Frais.php");
        break;


    case 'changer':

        $mois = $_POST['pets'];
$_SESSION['mois'] = $mois;
        
        $listefrais = $pdo->afficherForFait($_SESSION['idVisiteur'], $_SESSION['mois']);
        
        include("vues/v_changer.php");
        break;

    case 'refuser':
        
        $libelle = $_GET['libelle'];
        
        $id = $_GET['id'];

        
            $pdo->refuserFrais($id, $libelle);
        

            $listefrais = $pdo->afficherForFait($_SESSION['idVisiteur'], $_SESSION['mois']);
            $listeHorsFrais = $pdo->afficherHors($_SESSION['idVisiteur'], $_SESSION['mois']);
            include("vues/v_lista_Frais.php");
            break;
    
    default:
        # code...
        break;
}

?>