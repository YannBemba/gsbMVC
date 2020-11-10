<?php


$idV = $_GET['idV'];
$mois = $_GET['mois'];
$montantValide = $_GET['montantV'];
$idEtat = $_GET['idE'];

$leVisiteur = $pdo->getVisiteur($idV);


foreach ($leVisiteur as $visitor) {
    $nombre = $visitor['prenom']; 
    $apellido = $visitor['nom']; 

    $completo = $apellido.' '.$nombre; 
}



require('fpdf/fpdf.php');

$pdf = new FPDF();

// ajoute une page
$pdf->AddPage();
// définit la police courante
$pdf->SetFont('Arial','B',16);
//ajouter une image

$pdf->Image('images/logo.jpg',20,20, 74, 58);
$pdf->Ln(80);
// affiche du texte
$pdf->Cell(40);
$pdf->Cell(40,10,'Laboratoire GSB !');
$pdf->Ln(20);
$pdf->Cell(10);
$pdf->Cell(40,10, utf8_decode('id Visiteur : '.$completo));
$pdf->Ln(10);
$pdf->Cell(10);
$pdf->Cell(40,10,'Mois : '.$mois);
$pdf->Ln(10);
$pdf->Cell(10);
$pdf->Cell(40,10,utf8_decode('Montant Validé : '.$montantValide));
$pdf->Ln(10);
$pdf->Cell(10);
$pdf->Cell(40,10,'id Etat : '.$idEtat);
// Enfin, le document est terminé et envoyé au navigateur grâce à Output().
ob_end_clean();
$pdf->Output();
?>