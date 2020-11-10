 <!-- Division pour le sommaire -->
 <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom'];  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=voirVisiteur&action=listeVisiteurs" title="Liste des visiteurs ">Liste des visiteurs</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=Rembourser&action=listaRembourser" title="Liste des visiteurs ">Fiches a rembourser</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>