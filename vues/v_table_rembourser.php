<div id="contenu">


<table class="listeLegere">
  <thead>
    <tr>
      <th scope="col">id Visiteur</th>
      <th scope="col">Mois</th>
      <th scope="col">montantValide</th>
      <th scope="col">idEtat</th>
      <th scope="col">PDF</th>
      
    </tr>
  </thead>
  <tbody>
  
  <?php
  
 
  
  foreach ($lesFiches as $fiche) {
    

    echo "
    
    
    
    <tr>
    <th scope='col'>".$fiche['idVisiteur']."</th>
      <th scope='col'>".$fiche['mois']."</th>
      <th scope='col'>".$fiche['montantValide']."</th>
      <th scope='col'>".$fiche['idEtat']."</th>
      <th scope='col'><a href='index.php?uc=pdf&idV=".$fiche['idVisiteur']."&mois=".$fiche['mois']."&montantV=".$fiche['montantValide']."&idE=".$fiche['idEtat']."'><img src='images/pdf.png' width='50' height='50'></a></th>
      <th scope='col'><a href='index.php?uc=pagado&idV=".$fiche['idVisiteur']."&mois=".$fiche['mois']."'>Valider</a></th>
      </tr>
  
    
  
  
    
    ";

  
}
  
  

  
  
  
  
  ?>
    

</tbody>
</table>

