<div id="contenu">
  <center><h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee ?>: </h2></center>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat ?> et mise en paiement depuis le <?php echo $numMois."-".$numAnnee ;?> <br> <!--Montant validé : <?php echo $montantValide." €"?>-->            
    </p>
    <form method="POST"  action="index.php?uc=gererFrais&action=validerFiche&idVisSelect=<?php echo $idVisSelect;?>&moisSelected=<?php echo $leMois;?>">
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
                <td class="qteForfait"><input type="text" name="quantite" value="<?php echo $quantite ?>" size="14"> </td>
     <?php
          }
    ?>
    </tr>
    </table>
    
    <table class="listeLegere">
       <caption>Descriptif des éléments hors forfait -<input type="text" size="2" name="nbJustifs" required="required">- justificatifs reçus -
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
                <td><input type="text" name="date" value="<?php echo $date ?>"  size="14"></td>
                <td><input type="text" name="libelle" value="<?php echo $libelle ?>"  size="14"></td>
                <td><input type="text" name="montant" value="<?php echo $montant ?>"  size="14"></td>
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
  <center>
    <input type="submit" onclick="return confirm('Voulez-vous vraiment valider ce frais ?');" value="Valider cette fiche" />
  </center>
  </form>
  </div>
      
