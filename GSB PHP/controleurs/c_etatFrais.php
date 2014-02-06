﻿<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$moisFicheActuel = date("Ym");
switch($action){
	case 'selectionnerMois':{
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMois );
		$moisASelectionner = $lesCles[0];
		include("vues/v_listeMois.php");
		break;
	}
	case 'voirEtatFrais':{
		$leMois = $_REQUEST['lstMois']; 
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$moisASelectionner = $leMois;
		include("vues/v_listeMois.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_etatFrais.php");
		break;
	}
	
	/**
	*@author ...
	*/
		case 'infoVisteur':{
		$visiteur=$pdo->getInfosV();
		include("vues/v_affVisiteurs.php");
		break;
	}


	/**
	*@author ....
	*/
		case 'ChoixVisiteur':{
		
		$lesMois = $pdo->getVisiteurFicheCR($moisFicheActuel);

		$visiteurFiche = $pdo->getVisiteurFicheCR($moisFicheActuel);

		//Si la fonction getVisiteurFicheCR renvoie null affiche un msg et renvoie à la page d'accueil.
		if($visiteurFiche==null){

			echo "<div class=\"infosFiche message\">

					<div class=\"left\">

						<div class=\"icone\">
							<img src=\"./images/imgInfos.png\">
						</div>

					</div>

					<div class=\"right\">

						<p>Il n'y a aucune fiche a valider ce mois çi</p>

					</div>
				</div>
					<meta http-equiv=\"refresh\" content=\"3; URL=index.php?uc=etatFrais&action=listeVisiteur\">			  
				 ";

		}

		else{

		   include("vues/v_choixVisiteur.php");

		}

		break;
	}
	
	/**
	*@author ....
	*/
		case 'voirFicheFraisVisiteur':{	
		
		$leMois = $_REQUEST['lstMois']; 
		$idVis = $_REQUEST['idVis'];
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVis,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVis,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVis,$leMois);
	
		
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		$ficheFraiVisiteur=$pdo->getLesFraisHorsForfait($idVis,$leMois);

		 include("vues/v_ficheFrais.php");
		 break; 
	}

	/**
	*@author Zoubert Hanem
	*/
		case 'ChoixSuivi':{
		//Récupere le visiteur 
		$visiteurFiche = $pdo->getVisiteurFicheVa();
		//Récupere le mois de la fiche
		$moisFiche = $pdo->getVisiteurFicheVa();
		include("vues/v_choixSuivieVisiteur.php");
		break;
	}

	/**
	*@author Zoubert Hanem
	*/
		case 'voirSuiviPaiement':{
		$leMois = $_REQUEST['lstMois']; 
		$idVis = $_REQUEST['idVis'];
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVis,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVis,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVis,$leMois);
		
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		 $ficheFraiVisiteur=$pdo->getLesFraisHorsForfait($idVis,$leMois);
		include("vues/v_suiviPaiement.php");
		break;
	}
	
	/**
	*@author ....
	*/
	case 'listeVisiteur':{
		$lesVisiteurs = $pdo->getInfosV();
		include("vues/v_accueilComptable.php");
		break;
	}
}
?>