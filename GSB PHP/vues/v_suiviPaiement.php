<div id="contenu">
	<center><h2>Suivie paiement</h2></center>
	<p>
		<b>Fiche de frais du mois <?php echo $numMois."-".$numAnnee ?>:</b>
	</p>
	<div class="encadre">
		<p>
			Etat : <?php echo $libEtat ?> depuis le <?php echo $numMois."-".$numAnnee ?> <br> Montant validé : <?php echo $montantValide." €"?>            
		</p>
  </div>
  <form method="POST"  action="index.php?uc=gererFrais&action=rembourserFiche">
    <div class="corpsForm">
      <table class="listeLegere">

          <caption>Eléments forfaitisés </caption>

          <tr>
            <?php
            foreach( $lesFraisForfait as $unFraisForfait ) 
            {
            $libelle = $unFraisForfait['libelle'];
            ?>  
            <th> <?php echo $libelle?></th>
            <?php
            }
            ?>
          </tr>

          <tr>
            <?php
            foreach (  $lesFraisForfait as $unFraisForfait){

            $idVisiteur  = $unFraisForfait['idVisiteur'];
            $idFrais = $unFraisForfait['idfrais'];            
            $quantite = $unFraisForfait['quantite'];

            ?>
            <td class="qteForfait"><input type="text" name="<?php echo $idVisiteur; ?>" value="<?php echo $quantite ?>" size="14"> </td>
            <?php
            }
            ?>
          </tr>

        </table>

        <table class="listeLegere">
          <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?>- justificatifs reçus -</caption>
          <tr>
            <th class="date">Date</th>
            <th class="libelle">Libellé</th>
            <th class='montant'>Montant</th> 
            <!--<th class='montant'>Supprimer</th>-->              
          </tr>
          <?php      
            foreach ($lesFraisHorsForfait as $unFraisHorsForfait){

            $date    = $unFraisHorsForfait['date'];
            $libelle = $unFraisHorsForfait['libelle'];
            $montant = $unFraisHorsForfait['montant'];
          ?>
          <tr>
            <td><input type="" value="<?php echo $date ?>"  size="14"></td>
            <td><input type="" value="<?php echo $libelle ?>"  size="14"></td>
            <td><input type="" value="<?php echo $montant ?>"  size="14"></td>
            <!--<td><input type="submit" value="Suprimer" name="btnSup"></td>-->
          </tr>
          <?php 
          }
          ?>
      </table>
        <center>
            <input id="paiement" type="submit" value="Rembourser" size="20" />
        </center>
    </div>
  </form>
      