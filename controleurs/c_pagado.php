<?php


$idV = $_GET['idV'];
$mois = $_GET['mois'];

$pdo->miseEnRembourse($mois, $idV);
//$pdo->miseMontantValide($mois, $idV);
$pdo->supprimer($mois, $idV);

header('Location: index.php?uc=Rembourser');
?>