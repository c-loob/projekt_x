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
    	$('#loadContent').load('erakondadehaaltearv.php #erakHaalteArv');
    	document.title = "Projektx - Tulemused";
	 	//window.history.pushState("", "Tulemused", "/tulemused");
	});

	$('#statistika').click(function(){
		$('#loadContent').load('statistika.php #statistika');
   	document.title = "Projektx - Statistika";
	});
	
	$('#lisaKandidaadiks').click(function(){
		$('#loadContent').load('lisaKandidaadiks.php #lisakandidaadiks');
   	document.title = "Projektx - Lisa kandidaadiks";
	});	
	

	$(document).on('change', '#valiPiirkond', function() {
		var id = $(this).find("option:selected").attr("id");
		
      $.ajax({
    		url: 'kandidaadidjson.php',
    		type: 'post',
    		dataType:'JSON',
    		data: { "id": id },
    		success: function(json) { 
    			$("#kandidaadidTabel tr").remove();
    			drawTable(json);
    		}
		});
    });
    
    
    function drawTable(data) {
    	var row = $("<tr />")
    	$("#kandidaadidTabel").append(row); 
    	row.append("<th>Eesnimi</th>")
    	row.append("<th>Perenimi</th>")
    	row.append("<th>Piirkond</th>")
    	row.append("<th>Erakond</th>")
    	for (var i = 0; i < data.length; i++) {
        	drawRow(data[i]);
    		}
		}

	function drawRow(rowData) {
    var row = $("<tr />")
    $("#kandidaadidTabel").append(row); 
    	row.append($("<td>" + rowData.eesnimi + "</td>"));
    	row.append($("<td>" + rowData.perenimi + "</td>"));
    	row.append($("<td>" + rowData.piirkond + "</td>"));
    	row.append($("<td>" + rowData.erakond + "</td>"));
	}

});





















