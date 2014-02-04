    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    <?php if($_SESSION['comptable']==true) { ?>
      </div>  
	<fieldset id="menu">
	  <legend>Menu</legend>
    <ul id="menuList">
			<li class="smenu">
			  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']; ?>
		   </li>
		    <li class="smenu">
              <a href="index.php?uc=etatFrais&action=listeVisiteur" title=""><hr/>Liste des Visiteurs</a>
      	   </li>
		   <li class="smenu">
              <a href="index.php?uc=etatFrais&action=ChoixVisiteur" title="Valider fiche de frais"><hr/>Valider les fiches de frais</a>
      	   </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=ChoixSuivi" title="Suivre le paiement des fiches de frais"><hr/>Suivre le paiement des fiches de frais</a>
           </li>

		   <li class="smenu">
              <a href="index.php?uc=etatFrais&action=#" title="Remboursement"><hr/>Remboursement</a>
        </li>

			<li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion\" title="Se déconnecter"><hr/>Déconnexion</a>
      </li>
         </ul>
        </fieldset>
    </div>
    <?php
    
	}

	else{ ?>

      </div>  
       <fieldset id="menu">
    <legend>Menu</legend>
        <ul id="menuList">
	        <li class="smenu">
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    </fieldset>
    <?php
  }

  ?>