<?php

    echo '<div id="lisakandidaadiks">';
      echo '<h2>Registreeri kandidaadiks</h2>';
      echo '<form method="post" action="lisaKandidaadiksAdd.php" enctype="multipart/form-data" >';
      echo 		'<table>';
      echo   	'<tr> <td>Eesnimi</td>  <td><input type="text" name="eesnimi" id="eesnimi"/></td>   </tr>';
      echo   	'<tr> <td>Perenimi</td> <td><input type="text" name="perenimi" id="perenimi"/></td> </tr>';
      echo   	'<tr> <td>Piirkond</td> <td><input type="text" name="piirkond" id="piirkond"/></td> </tr>';
      echo   	'<tr> <td>Erakond</td>  <td><input type="text" name="erakond" id="erakond"/></td>   </tr>';
      echo		'</table>';     
      echo		'<input class="menuButton" type="submit" name="registreeri" value="Registreeri" />'; 					
    	echo '</form>'; 
    echo '</div>';
   
?>