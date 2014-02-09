<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
$moisFicheActuel = date("Ym");
$ficheCR = $pdo->getVisiteurFicheCR($moisFicheActuel);
$nbFicheCR = count($ficheCR);

$ficheVA = $pdo->getVisiteurFicheVa();
$nbFicheVA = count($ficheVA);
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");

		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$comptable = $visiteur['comptable'];

			connecter($id,$nom,$prenom,$comptable);
			include("vues/v_sommaire.php");

		}
		if ($_SESSION['comptable']==true) {
			$lesVisiteurs = $pdo->getInfosV();
			include("vues/v_accueilComptable.php");
		}
			
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>