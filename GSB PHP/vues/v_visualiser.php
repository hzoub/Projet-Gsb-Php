<div id="contenu">
<center><table border=1>
	<tr>
		<td colspan="24"><center>Fiche à valider (hors forfait)</center></td></tr>
	<tr>
		<td>&nbsp; Nom &nbsp; </td>
		<td>&nbsp; Prénom &nbsp; </td>
		<td> &nbsp; Libellé  &nbsp; </td>
		<td>&nbsp; Montant &nbsp; </td>
		<td>&nbsp;  Date d'achat &nbsp; </td>
		
		
	</tr>

	<?php 
	$majFrais=$pdo-> majFraistest();
		foreach($majFrais as $maj){
		?>
		<tr>
		<td>&nbsp;  <?php echo $maj ['nom'] ?>&nbsp; </td>
			<td>&nbsp; <?php echo $maj ['prenom'] ?>&nbsp; </td>
			<td>&nbsp; <?php echo $maj['libelle'];?>&nbsp; </td>
			<td>&nbsp; <?php echo $maj['montant'];?> €&nbsp; </td>
			<td>&nbsp; <?php echo $maj['date'];?> &nbsp; </td>
			
		</tr><?php
		}?>
</table>
</center>
<br>


<center><table border=1>
	<tr>
		<td colspan="24"><center>Fiche à valider (forfait)</center></td></tr>
	<tr>
		<td>&nbsp; Nom &nbsp; </td>
		<td> &nbsp; Prénom &nbsp; </td>

		<td> &nbsp; Libellé  &nbsp;</td>
		<td> &nbsp; Montant &nbsp; </td>
		
		<td> &nbsp; Quantité &nbsp; </td>
		<td> &nbsp; Mois &nbsp; </td>
		
		
	</tr>

	<?php 
	$majFrais=$pdo-> majFraisForfaittest();
		foreach($majFrais as $maj){
		?>
		<tr>
		<td>&nbsp; <?php echo $maj['nom'] ?>&nbsp; </td>
			<td>&nbsp; <?php echo $maj ['prenom'] ?>&nbsp; </td>
				<td>&nbsp; <?php echo $maj['libelle'];?>&nbsp; </td>
			<td>&nbsp; <?php echo $maj['montant'];?> €&nbsp; </td>
			<td>&nbsp; <?php echo $maj['quantite'];?>&nbsp; </td>
			<td>&nbsp; <?php echo $maj['mois'];?>&nbsp;  </td>
			
		</tr><?php
		}?>
</table>
</center>












