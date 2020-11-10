

<div id="contenu">



<table class="listeLegere">
  <thead>
    <tr>
      <th scope="col">Forfait Etape</th>
      <th scope="col">Frais Kilometrique</th>
      <th scope="col">Nuitée Hotel</th>
      <th scope="col">Repas Restaurant</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <?php
  
  $total = 0;
  
  foreach ($listefrais as $frais) {
    

    echo "
    
    
    
    
    <td>".$frais['quantite']."</td>
    
  
    
  
  
    
    ";

    $total += $frais['quantite'];
}
  
  

  
  
  
  
  ?>
    <td><a href="index.php?uc=faireChange&action=changer">Modifier</a></td>
</tr>
</tbody>
</table>
<div>
  <p>Total : <?php echo $total; ?></p>
</div>
</div>





<div id="contenu">
<table class="listeLegere">
  <thead>
    <tr>
      <th  scope="col">Date</th>
      <th class="libelle" scope="col">Libelle</th>
      <th  scope="col">Montant</th>
      
    </tr>
  </thead>
  <tbody>
  
  <?php
  
  
  foreach ($listeHorsFrais as $frais) {
    

    echo "
    
    
    
    
    <tr>
      <td scope='col'>".$frais['date']."</td>
      <td scope='col'>".$frais['libelle']."</td>
      <td scope='col'>".$frais['montant']."</td>
      <td scope='col'><a href='index.php?uc=listeFrais&action=refuser&id=".$frais['id']."&libelle=".$frais['libelle']."'>Refuser</a></td>
      
    </tr>
    
  
  
  
  
    
    ";

    
}

$quantite = 0;

foreach ($listeRembourse as $montant) {
  $quantite += $montant['montant'];
  
}



  
  

  
  
  
  
  ?>



</tbody>
</table>

<div>
  <p>Total : <?php echo $quantite; ?></p>
</div>

<div>
  <p>Total de la facture : <?php $Facture = $quantite + $total; echo $Facture; ?></p>
</div>
<a href='index.php?uc=listeRembourse&action=afficherListeRembourser&facture="<?php echo $Facture; ?>"&mes="<?php echo $_SESSION['mois']; ?>"'><button>Valider</button></a>
</div>

