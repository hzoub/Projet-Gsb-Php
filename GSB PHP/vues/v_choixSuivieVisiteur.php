<div id="contenu">
	<center><h2>Choix visiteur</h2></center>
	<p><b>Selectionner un visiteur et un mois:</b></p>
<form method="POST" action="index.php?uc=etatFrais&action=voirSuiviPaiement">
	   <div class="corpsForm">
		  <p>
			<label for="lstVisiteur">Visiteur : </label>
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
			</select><br>
			
		<!--MOIS-->
		 <label for="lstMois">Mois : </label>
	        <select id="lstMois" name="lstMois">
	            <?php
				foreach ($moisFiche as $unMois)
				{
				    $mois = $unMois['mois'];
				}
					?>
					<option selected value="<?php echo $mois ?>"><?php echo $mois; ?> </option>	            
	         </select>
		    </p>
     	  
      </div>
        <div class="piedForm">
		      <p>
		        <input id="ok" type="submit" value="Valider" size="20" title="Demandez à consulter cette fiche de frais" />
		      </p> 
      </div>
</form>
