$(document).ready(function(){
	
	if (query = window.location.search.substring()) {
   	var query = window.location.search.substring(1);
   	var vars = query.split("=");
   	$('#valiPiirkond').val(vars);
		$.ajax({
    		url: 'kandidaadidjson.php',
    		type: 'get',
    		dataType:'JSON',
    		data: "id="+ vars[1] ,
    		success: function(json) {
    			$("#kandidaadidTabel tr").remove();
    			drawTable(json);
    		}
		});
	}

	$(document).on('change', '#valiPiirkond', function() {
		var id = $(this).find("option:selected").attr("id");
      $.ajax({
    		url: 'kandidaadidjson.php',
    		type: 'get',
    		dataType:'JSON',
    		data: "id="+ id ,
    		success: function(json) {
    			
    			var data = "?id="+id,
        		url = data;
    			history.pushState(data, null, url);
    			
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


	$(document).on('submit', '#kandideeriCheck', function() {
    	if ($.trim($("#eesnimi").val()) === ""){
    		$('#eesnimi').addClass('kandideeriInputError');
			document.getElementById('kandideeriError').innerHTML = 'Täida kõik väljad!'; 
        	return false;
    		} 
    	else {
			$('#eesnimi').removeClass('kandideeriInputError');    	
    	}
	});
	
	$(document).on('submit', '#kandideeriCheck', function() {
    	if ($.trim($("#perenimi").val()) === ""){
    		$('#perenimi').addClass('kandideeriInputError');
			document.getElementById('kandideeriError').innerHTML = 'Täida kõik väljad!';   
        	return false;
    		} 
    	else {
			$('#perenimi').removeClass('kandideeriInputError');    	
    	}
	});
	
	$(document).on('submit', '#kandideeriCheck', function() {
    	if ($.trim($("#piirkond").val()) === "Piirkond"){
    		$('#piirkond').addClass('kandideeriInputError');
			document.getElementById('kandideeriError').innerHTML = 'Täida kõik väljad!';   
        	return false;
    		} 
    	else {
			$('#piirkond').removeClass('kandideeriInputError');    	
    	}
	});
	
	$(document).on('submit', '#kandideeriCheck', function() {
    	if ($.trim($("#erakond").val()) === "Erakond"){
    		$('#erakond').addClass('kandideeriInputError');
			document.getElementById('kandideeriError').innerHTML = 'Täida kõik väljad!';   
        	return false;
    		} 
    	else {
			$('#erakond').removeClass('kandideeriInputError');    	
    	}
	});


///////////////////history
(function(){

  var menustaff = document.querySelector('#navbar'),
    lisak = document.querySelector('#lisaKandidaadiks'),
    textWrapper = document.querySelector('#id'),
    sisu = document.querySelector('.sisu'),
    defaultTitle = "Projektx - Valime parimat!";

//////
  function requestContent(file){
    window.location.href = file;
  }

	lisak.addEventListener('click', function(e){
    if(e.target != e.currentTarget){
      e.preventDefault();
      var data = e.target.getAttribute('id'),
        url = data + ".php";
      history.pushState(data, null, url);
      requestContent(url);
    }
    e.stopPropagation();
  }, false);


  menustaff.addEventListener('click', function(e){
    if(e.target != e.currentTarget){
      e.preventDefault();
      var data = e.target.getAttribute('id'),
        url = data + ".php";
      history.pushState(data, null, url);
      requestContent(url);
    }
    e.stopPropagation();
  }, false);

  var currentPage = window.location.href;
  window.addEventListener('popstate', function(e){

    var character = e.state;
    if (character == null) {
      sisu.innerHTML = "Tere tulemast valima!";
      document.title = defaultTitle;
    }
    
    if (character.slice(0, 4) == "?id=") {
    	var poolitan = window.location.href.split("/");
		var vaja = poolitan[4].split("?");
		if(currentPage.split("/")[4].split("?")[0] !== vaja[0]){	
			requestContent(vaja[0] + character);
		} 	
    else {	
		var id = character.slice(4);  
		$('#valiPiirkond').val(id);
		
		$.ajax({
    		url: 'kandidaadidjson.php',
    		type: 'get',
    		dataType:'JSON',
    		data: "id="+ id ,
    		success: function(json) { 
    			$("#kandidaadidTabel tr").remove();
    			drawTable(json);
    		}
		});
		}
    }
    else {
    	document.title = "Projektx | " + character;
      requestContent(character + ".php");
    }
  })
})();
///////////////////////////////////////HISTORY LÕPP
});
