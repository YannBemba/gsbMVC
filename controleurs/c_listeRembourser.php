<?php

include("vues/v_sommaire_c.php");

$Facture = $_GET['facture'];

$mes = $_GET['mes'];

$id = $_SESSION['idVisiteur'];


$pdo->miseEnRembourser($Facture, $mes, $id);
$pdo->miseEnEtat($mes, $id);










?>