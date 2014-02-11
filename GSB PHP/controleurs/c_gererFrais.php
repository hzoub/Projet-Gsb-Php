<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
switch($action){

	case 'saisirFrais':{
		if($pdo->estPremierFraisMois($idVisiteur,$mois)){
			$pdo->creeNouvellesLignesFrais($idVisiteur,$mois);

		}else{
			$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
			$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$mois);
			include("vues/v_listeFraisForfait.php");
			include("vues/v_listeFraisHorsForfait.php");
		}
		break;
	}

	case 'validerMajFraisForfait':{
		$lesFrais = $_REQUEST['lesFrais'];
		if(lesQteFraisValides($lesFrais)){
	  	 	$pdo->majFraisForfait($idVisiteur,$mois,$lesFrais);
		}
		else{
			ajouterErreur("Les valeurs des frais doivent être numériques");
			include("vues/v_erreurs.php");
		}
	  break;
	}

	case 'validerCreationFrais':{
		$dateFrais = $_REQUEST['dateFrais'];
		$libelle = $_REQUEST['libelle'];
		$montant = $_REQUEST['montant'];
		valideInfosFrais($dateFrais,$libelle,$montant);
		if (nbErreurs() != 0 ){
			include("vues/v_erreurs.php");
		}
		else{
			$pdo->creeNouveauFraisHorsForfait($idVisiteur,$mois,$libelle,$dateFrais,$montant);
		}
		break;
	}

	
	case 'supprimerFrais':{
		$idFrais = $_REQUEST['idFrais'];
	    $pdo->supprimerFraisHorsForfait($idFrais);
		break;
	}

	 case "validerFiche":{

        /*$idVisiteur = $_SESSION['idVisiteur'];
        $mois = $_SESSION['leMois'];
        $pdo->majEtatFicheFrais($idVisiteur, $mois,'VA');
        $tabMontant = $pdo->getLesMontants();
        $tabQuantites = $pdo->getLesQuantites($idVisiteur, $mois);
        $montant = 0;
        for($i=0; $i<4; $i++){
            $montant += ($tabMontant[$i][0] * $tabQuantites[$i][0]);
        }
        $montantHorsForfait = $pdo->getMontantHorsForfait($idVisiteur, $mois);
        $montant += $montantHorsForfait[0];
        $pdo->majMontantValide($idVisiteur, $mois, $montant);
        <h2>La validation a bien &eacute;t&eacute; prise en compte</h2>*/
        break;
    }
	
	case 'rembourserFiche':{

		$idVisSelect = $_REQUEST['idVisSelect'];
		echo $idVisSelect;
        /*$mois = $_SESSION['leMois'];
        $pdo->majEtatFicheFrais($idVisiteur, $mois,'RB');
        <h2>Le remboursement a bien &eacute;t&eacute; pris en compte</h2>*/
	 break;
	}
	

}

?>