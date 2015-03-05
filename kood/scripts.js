$(document).ready(function(){

	//Adds css class menuButtonClicked to clicked button
	$('button').click(function(){
		$('.menuButton').removeClass('menuButtonClicked');
    	$(this).addClass('menuButtonClicked');
	});


	//Content changes
	$('#kandidaadid').click(function(){
	 	$('#loadContent').load('kandidaadid.php #kandidaadid');
    	document.title = "Projektx - Kandidaadid";
	});

	$('#tulemused').click(function(){
    	$('#loadContent').load('tulemused.php #tulemused');
    	document.title = "Projektx - Tulemused";
	 	//window.history.pushState("", "Tulemused", "/tulemused");
	});


	$('#statistika').click(function(){
		$('#loadContent').load('statistika.php #statistika');
   	document.title = "Projektx - Statistika";
	});

});







