<?php
include("vues/v_sommaire_c.php");

$idComptable = $_SESSION['idVisiteur'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];

$action = $_REQUEST['action'];



switch ($action) {
    case 'listeVisiteurs':
        $idComptable = $pdo->getIdComptable($nom, $prenom);

        foreach ($idComptable as $id) {
            $idC = $id['id'];
        }


        $listeVisiteur = $pdo->afficherVisiteurs($idC);
        include("vues/listeVisiteurs.php");
        break;
    
    default:
        # code...
        break;
}

?>