
<div id="contenu">
    <form action="index.php?uc=listeFrais&action=listeFrais" method="POST">
    <div class="corpsForm">

    <label for="lstMois" accesskey="n">Mois : </label>    
<select name="pets" id="lstMois">
    <option value=''>---saisir un mois---</option>
   


<?php




foreach ($listeMois as $mois) {
    

    echo "
    
    
    <option value='".$mois['mois']."'>".$mois['mois']."</option>";
}








?>


</select>

</div>

<div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>

</form>

</div>