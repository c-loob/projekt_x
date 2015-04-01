<?php

    echo '<div id="laadimiseks">';
      echo '<h2>Registreeri kandidaadiks</h2>';
      echo '<form name="kandideeriCheck" id="kandideeriCheck" method="post" action="lisaKandidaadiksAdd.php" enctype="multipart/form-data">';
      echo 		'<table>';
      echo   	'<tr> <td>Eesnimi</td>  <td><input type="text" name="eesnimi" id="eesnimi"/></td> </tr>';
      echo   	'<tr> <td>Perenimi</td> <td><input type="text" name="perenimi" id="perenimi"/></td> </tr>';
      echo   	'<tr> <td>Piirkond</td> <td>
      													<select name="piirkond" id="piirkond">
     															<option id="Piirkond" value="Piirkond">Piirkond</option>  															
  	 															<option id="Tallinn" value="Tallinn">Tallinn</option>
  	 															<option id="Tartu" value="Tartu">Tartu</option>
  	 															<option id="Narva" value="Narva">Narva</option>
     														</select></td> 
     					</tr>';
      echo   	'<tr> <td>Erakond</td>  <td>
      													<select name="erakond" id="erakond">
     															<option id="Erakond" value="Erakond">Erakond</option>  															
     															<option id="Vasak" value="Vasak">Vasak</option>  															
  	 															<option id="Keskmine" value="Keskmine">Keskmine</option>
  	 															<option id="Parem" value="Parem">Parem</option>
     														</select></td></td>   
     					</tr>';
      echo   	'<tr id="deleteStyle"><td id="deleteStyle"></td><td id="deleteStyle"><span id="kandideeriError"></span></td></tr>';
      echo		'</table>';     
      echo		'<input class="menuButton" type="submit" name="registreeri" value="Registreeri" />'; 
    	echo '</form>';
    echo '</div>';
    
?>