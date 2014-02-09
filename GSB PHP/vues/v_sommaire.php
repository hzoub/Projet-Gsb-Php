    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    <?php if($_SESSION['comptable']==true) { ?>
      </div>  
    <ul id="menuList">
			<li class="nomVisiteur">

			  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']; ?><hr/>
		   </li>
		    <li class="">
              <a href="index.php?uc=etatFrais&action=listeVisiteur" title="Liste des Visiteurs">Liste des Visiteurs</a>
      	   </li>
		   <li class="smenu">
              <a href="index.php?uc=etatFrais&action=ChoixVisiteur" data-clicked="no" id="valider" title="Valider fiche de frais">Valider les fiches de frais</a>
              <span class="notifFiche"><?php if(isset($nbFicheCR))echo $nbFicheCR; ?></span>
      	   </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=ChoixSuivi" id="suivi" title="Suivre le paiement des fiches de frais">Suivre le paiement des fiches de frais</a>
              <span class="notifFiche"><?php if(isset($nbFicheVA)) echo $nbFicheVA; ?></span>
           </li>

		   <li class="smenu">
              <a href="index.php?uc=etatFrais&action=#" title="Remboursement">Remboursement</a>
        </li>

			<li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion\" title="Se déconnecter">Déconnexion</a>
      </li>
         </ul>
    </div>
    <?php
    
	}

	else{ ?>

      </div>  
        <ul id="menuList">
	        <li class="nomVisiteur">
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?><hr/>
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
    <?php
  }

  ?>