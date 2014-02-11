<?php

$moisFicheActuel = date("Ym");
$ficheCR = $pdo->getVisiteurFicheCR($moisFicheActuel);
$nbFicheCR = count($ficheCR);

$ficheVA = $pdo->getVisiteurFicheVa();
$nbFicheVA = count($ficheVA);
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));

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

/*----------------------------------------------------------*/

	/**
	*@author ....
	*/
	case 'listeVisiteur':{
		$lesVisiteurs = $pdo->getListeVisiteur();
		include("vues/v_accueilComptable.php");
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
			/*------------------------ZH----------------------------------*/
			echo "<div class=\"infosFiche message\">

					<div class=\"left\">

						<div class=\"icone\">
							<img src=\"./images/imgInfos.png\">
						</div>

					</div>

					<div class=\"right\">

						<p>Il n'y a pas de fiche de frais pour ce mois</p>

					</div>
				</div>
					<meta http-equiv=\"refresh\" content=\"3; URL=index.php?uc=etatFrais&action=listeVisiteur\">			  
				 ";
			/*----------------------------------------------------------*/
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
		$idVisSelect = $_REQUEST['idVisSelect'];
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisSelect,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisSelect,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisSelect,$leMois);
	
		
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		$ficheFraiVisiteur=$pdo->getLesFraisHorsForfait($idVisSelect,$leMois);

		 include("vues/v_ficheFrais.php");
		 break; 
	}
/*----------------------------------------------------------*/

	/**
	*@author Zoubert Hanem
	*/
		case 'ChoixSuivi':{
		//Récupere la fiche du visiteur 
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

		$idVisSelect = $_REQUEST['idVisSelect'];
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisSelect,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisSelect,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisSelect,$leMois);
		
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		 $ficheFraiVisiteur=$pdo->getLesFraisHorsForfait($idVisSelect,$leMois);
		 
		include("vues/v_suiviPaiement.php");
		break;
	}

/*----------------------------------------------------------*/
}
?>