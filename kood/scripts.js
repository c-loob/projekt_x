$(document).ready(function(){

	//Adds css class menuButtonClicked to clicked button
	$('button').click(function(){
		$('.menuButton').removeClass('menuButtonClicked');
    	$(this).addClass('menuButtonClicked');
	});

/*
	//Content changes
	$('#kandidaadid').click(function(){
	 	$('#loadContent').load('kandidaadid.php #laadimiseks');
    	//document.title = "Projektx - Kandidaadid";
    	//window.history.pushState("", "Tulemused", "/registration/kandidaadid");
		return false;
	});

	$('#tulemused').click(function(){
    	$('#loadContent').load('erakondadehaaltearv.php #laadimiseks');
    	//document.title = "Projektx - Tulemused";
	 	//window.history.pushState("", "Tulemused", "/registration/tulemused");
		return false;
	});

	$('#statistika').click(function(){
		$('#loadContent').load('statistika.php #laadimiseks');
   	//document.title = "Projektx - Statistika";
   	//window.history.pushState("", "Tulemused", "/registration/statistika");
   	return false;
	});
	
	$('#lisaKandidaadiks').click(function(){
		$('#loadContent').load('lisaKandidaadiks.php #laadimiseks');
   	//document.title = "Projektx - Lisa kandidaadiks";
   	//window.history.pushState("", "Tulemused", "/registration/lisakandidaadiks");
   	return false;
	});	
	*/

	$(document).on('change', '#valiPiirkond', function() {
		var id = $(this).find("option:selected").attr("id");
		
      $.ajax({
    		url: '/registration/kandidaadidjson.php',
    		type: 'get',
    		dataType:'JSON',
    		data: "id="+ id ,
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

  var menustaff = document.querySelector('.leftside'),
    lisak = document.querySelector('.lisaKandidaadiks'),
    textWrapper = document.querySelector('#id'),
    content = document.querySelector('#loadContent'),
    defaultTitle = "Projektx - Valime parimat!";

//////
  function requestContent(file){
    $('#loadContent').load(file + ' #laadimiseks');
    return false;
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


  window.addEventListener('popstate', function(e){
    var character = e.state;

    if (character == null) {
      textWrapper.innerHTML = " ";
      content.innerHTML = " ";
      document.title = defaultTitle;
    } else {
      requestContent(character + ".php");
      document.title = "Projektx | " + character;
    }
  })
})();

});
