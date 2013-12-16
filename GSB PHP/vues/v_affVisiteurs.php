<center>
	<table id="affVisiteur" border="1" >
			 <tr align="center">
				 <td colspan="3">Listes des visiteurs</td>
			 </tr>
			 <tr align="center">
				 <td>Nom</td>
				 <td>Prenom</td>
				 <td>Etat fiche de frais</td>
			 </tr>
		<?php
			$lesVisiteurs = $pdo->getInfosV();
			foreach ($lesVisiteurs as $v){
		 ?>
			 <tr align=center >
				 <td><?php echo $v['nom']; ?></td>
				 <td><?php echo $v['prenom']; ?></td>
				 <td><?php echo ""; ?></td>
			 </tr>
				
			<?php } ?>
	</table>
			<br>
</center>