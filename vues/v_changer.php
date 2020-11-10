



<form class="corpsForm" method="POST" action="index.php?uc=faireChange&action=guardar">
    <legend>
<?php
  
  $total = 0;
  
  foreach ($listefrais as $frais) {
    

    echo "
    
    
    <div>
    <label>".$frais['idFraisForfait']."</label>
    <input name='".$frais['idFraisForfait']."' value=".$frais['quantite']." type='number'>
    </div>
    <br>
    
  
  
  
  
    
    ";

    
    $total += $frais['quantite'];
    
}   
  
  

  
  
  
  
  ?>
  <input type="hidden" name="suma" value="<?php echo $total;?>">

    <button type="submit" >Submit</button>
    </legend>
  </form>
  