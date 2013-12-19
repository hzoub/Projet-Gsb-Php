<div id="contenu">
	<center><h2>Suivie paiment</h2></center>
	<p><b>Selectionner un visiteur et un mois:</b></p>
<form method="POST" action="index.php?uc=etatFrais&action=voirSuiviePaiement">
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
		 <label for="lstMois" accesskey="n">Mois : </label>
	        <select id="lstMois" name="lstMois">
	            <?php
				foreach ($lesMois as $unMois)
				{
				    $mois = $unMois['mois'];
					$numAnnee =  $unMois['numAnnee'];
					$numMois =  $unMois['numMois'];
					if($mois == $moisASelectionner){
					?>
					<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
					<?php 
					}
					else{ ?>
					<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
					<?php 
					}
				
				}
	           
			   ?>    
	            
	         </select>
		    </p>
     	  
      </div>
        <div class="piedForm">
		      <p>
		        <input id="ok" type="submit" value="Valider" size="20" title="Demandez à consulter cette fiche de frais" />
		      </p> 
      </div>
</form>
