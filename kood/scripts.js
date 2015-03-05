//Adds css class menuButtonClicked to clicked button
$('button').click(function(){
	$('.menuButton').removeClass('menuButtonClicked');
    $(this).addClass('menuButtonClicked');
});


//Content changes
$('#kandidaadid').click(function(){
	window.location = "/kandidaadid.php";
    document.title = "Kandidaadid";
});


//Content changes
$('#statistika').click(function(){
	alert("whut?");
	window.location = "www.google.com";
    document.title = "Statistika";
});

$('#tulemused').click(function(){
    $('#loadContent').load('content.html #tulemused');
    document.title = "Tulemused";
	 window.history.pushState("", "Tulemused", "/tulemused");
});








