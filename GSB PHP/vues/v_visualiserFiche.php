<div id="contenu">
<center><table border=1>
	<tr>
		<td colspan="24"><center><b>Fiche des visiteurs</b></center></td></tr>
	<tr>
		<td><b>&nbsp; Nom &nbsp; </b></td>
		<td><b> &nbsp; Prénom &nbsp; </b></td>

		<td><b> &nbsp; Etat  &nbsp;</b></td>
		<td><b> &nbsp; Mois &nbsp; </b></td>
		
		
	</tr>

	<?php 
		foreach($mesFiches as $fiche){
		$leMois = substr($fiche['mois'], 4, 6)."/".substr($fiche['mois'], 0, 4);
		$Mois = $fiche['mois'];
		$idVis = $fiche['idVisiteur'];
	?>
		<tr>
			<td>&nbsp; <?php echo $fiche['nom'] ?>&nbsp; </td>
			<td>&nbsp; <?php echo $fiche ['prenom'] ?>&nbsp; </td>
			<td>&nbsp; <a href="index.php?uc=etatFrais&action=contenuFiche&idVis=.$idVis.&Mois="'.$Mois.'""><?php echo $fiche['libelle'];?></a>&nbsp; </td>
			<td>&nbsp; <?php echo $leMois;?></td>			
		</tr><?php
		}?>
</table>
</center>












