

<div id="contenu">
    <form action="index.php?uc=voirMois&action=listeMois" method="post">
    <div class="corpsForm">

    <label for="lstMois" accesskey="n">Visiteurs : </label>    
<select name="mois" id="lstMois">
    <option value=''>---saisir un visiteur---</option>
   


<?php



foreach ($listeVisiteur as $visiteur) {
    

    echo "
    
    
    <option value='".$visiteur['id']."'> ".$visiteur['nom']." ".$visiteur['prenom']."</option>";
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
