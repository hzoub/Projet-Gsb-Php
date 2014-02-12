<div id="contenu">
  <center><h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee ?>: </h2></center>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat ?> et mise en paiement depuis le <?php echo $numMois."-".$numAnnee ?> <br> <!--Montant validé : <?php echo $montantValide." €"?>-->            
    </p>
    <table class="listeLegere">
       <caption>Eléments forfaitisés </caption>
        <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
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
        $quantite = $unFraisForfait['quantite'];
       
    ?>
                <td class="qteForfait"><input type="" value="<?php echo $quantite ?>" size="14"> </td>
     <?php
          }
    ?>
    </tr>
    </table>

  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?>- justificatifs reçus -
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th> 
                <th class='montant'>Supprimer</th>                
             </tr>
        <?php      
        foreach ($lesFraisHorsForfait as $unFraisHorsForfait){
        	$date = $unFraisHorsForfait['date'];
        	$libelle = $unFraisHorsForfait['libelle'];
        	$montant = $unFraisHorsForfait['montant'];
          $id = $unFraisHorsForfait['id'];
		?>
             <tr>
                <td><input type="" value="<?php echo $date ?>"  size="14"></td>
                <td><input type="" value="<?php echo $libelle ?>"  size="14"></td>
                <td><input type="" value="<?php echo $montant ?>"  size="14"></td>
                <td>
                  <a href="index.php?uc=gererFrais&action=#=<?php echo $id ?>"
                    onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer
                  </a>
                </td>
             </tr>
        <?php 
          }
		?>
    </table>
	<center><input id="" type="reset" value="Valider cette fiche" size="20" /></center>
  </div>
      