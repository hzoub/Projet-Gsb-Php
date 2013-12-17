<div id="contenu">
	<center>
		<h2>Bienvenue dans l'espace Comptable</h2>
			<table id="affVisiteur" border="1" >
				 <tr align="center">
					 <td colspan="3"><b>Listes des visiteurs</b></td>
				 </tr>
				 <tr align="center">
					 <td>Nom</td>
					 <td>Prenom</td>
					 <td>Etat fiche de frais</td>
				 </tr>
			<?php
				
				foreach ($lesVisiteurs as $v){
			 ?>
				 <tr align=center >
					 <td><?php echo $v['nom']; ?></td>
					 <td><?php echo $v['prenom']; ?></td>
					 <td><?php echo ""; ?></td>
				 </tr>
					
				<?php } ?>
		     </table>
	</center>