$(document).ready(function(){

	$("#paiement").click(function(){
		event.preventDefault();
		alert("Mise en paiement de la fiche en cour de mise en place");
	});

	$(".infosFiche").addClass("animationMsg bounceIn").delay(3000).fadeOut("slow");

	var verifNotifFicheCR  = $(".notifFiche").first().text();
	var verifNotifFicheVA  = $(".notifFiche").last().text();


	if(verifNotifFicheCR!=0){
		$(".notifFiche").first().show();
	}



	if(verifNotifFicheVA!=0){
		$(".notifFiche").last().show();
	}


});