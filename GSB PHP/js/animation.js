$(document).ready(function(){

	$("#paiement").click(function(){
		event.preventDefault();
		alert("Mise en paiement de la fiche en cour de mise en place");
	});

	$(".infosFiche").addClass("animationMsg bounceIn").delay(3000).fadeOut("slow");
	
});