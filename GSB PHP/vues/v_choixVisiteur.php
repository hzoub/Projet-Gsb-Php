<div id="contenu">
	<center><h2>Valider la fiche pour l'utilisateur suivant :</h2></center>
	<p>
		<b>Selectionner un visiteur et un mois:</b>
	</p>
	<form method="POST" action="index.php?uc=etatFrais&action=voirFicheFraisVisiteur">
	   <div class="corpsForm">
	<center>
		Visiteur : 
			<select id="lstVisiteur" name="idVis" title="Sélectionnez l'id du visiteur souhaité">
					  <?php 
						foreach($visiteurFiche as $recup)  {
						$id = $recup["id"];
						$nom = $recup["nom"];
						$prenom = $recup["prenom"];
						?>

				<option name="idVis" value="<?php echo $id; ?>"><?php echo $nom." ".$prenom; ?></option>

				<?php
				}
				?> 
			</select>
	
		<!--MOIS-->
		Mois :
	        <select id="lstMois" name="lstMois">
	            <?php
				foreach ($lesMois as $unMois)
				{
				    $mois = $unMois['mois'];
				?>
				<option selected value="<?php echo $mois ?>"><?php echo $mois ?> </option>
				<?php } ?>    
	         </select>
	
     	  </center>
      </div>
        <div class="piedForm">
		      <p>
		        <input id="ok" type="submit" value="Valider" size="20" title="Demandez à consulter cette fiche de frais" />
		      </p> 
      </div>
</form>
