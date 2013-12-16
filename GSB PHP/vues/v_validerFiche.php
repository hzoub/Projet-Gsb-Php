<div id="contenu">
	<center><h2>Valider la fiche pour l'utilisateur suivant :</h2></center>
	<p>
		<b>Selectionner un visiteur et un mois:</b>
	</p>
	<form method="POST" action="index.php?uc=etatFrais&action=voirFicheFraisVisiteur">
	   <div class="corpsForm">
	<center>
		Visiteur : 
			<select id="lstVisiteur" name="idVisiteur" title="Sélectionnez l'id du visiteur souhaité">
					  <?php 
						foreach($visiteurFiche as $recup)  {
						$id = $recup["id"];
						$nom = $recup["nom"];
						$prenom = $recup["prenom"];
						$selected="";
						/*if($id==$idVisiteur) 
							$selected='selected="selected"';*/
						?>

				<option name="idVis" <?php echo $selected ?> value="<?php echo $nom." ".$prenom;?>"><?php echo $nom." ".$prenom;?></option>

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
	
     	  </center>
      </div>
        <div class="piedForm">
		      <p>
		        <input id="ok" type="submit" value="Valider" size="20" title="Demandez à consulter cette fiche de frais" />
		      </p> 
      </div>
</form>
