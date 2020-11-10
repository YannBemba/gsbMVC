<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
	}

	case 'voirVisiteur' :{
		include("controleurs/c_liste_visiteurs.php");break; 
	}

	case 'voirMois' :{
		include("controleurs/c_listeMois.php");break; 
	}

	case 'listeFrais' :{
		include("controleurs/c_liste_Frais.php");break; 
	}

	case 'faireChange' :{
		include("controleurs/c_changement.php");break; 
	}

	case 'guardar' :{
		include("controleurs/c_guardar_cambio.php");break; 
	}
	case 'listeRembourse' :{
		include("controleurs/c_listeRembourser.php");break; 
	}
	case 'Rembourser' :{
		include("controleurs/c_table_rembourser.php");break; 
	}
	case 'pdf' :{
		include("vues/v_generar_pdf.php");break; 
	}
	case 'pagado' :{
		include("controleurs/c_pagado.php");break; 
	}
}

include("vues/v_pied.php") ;
?>

