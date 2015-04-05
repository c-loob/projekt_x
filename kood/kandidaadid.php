
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <Title>Projektx - Valime Parimat</Title>
   <meta charset="UTF-8"> 
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="scripts.js"></script>
   <script src="js.js" type="text/javascript"></script>
</head>

<body>
<?php 
 include 'login.php';
 ?>
   <div id='mainWrapper'>

      <div id='header'>
			
         <div class='logoWrapper'>
            <!--<img id='logo' src="css/images/logoUus.png">-->
         </div>
			
         <div class='leftside' id='navigationWrapper'>
            <a href="kandidaadid.php" class="menuButtonClicked" id="kandidaadid">Kandidaadid</a>
            <a href="erakondadehaaltearv.php" class="menuButton" id="erakondadehaaltearv">Tulemused</a>
            <a href="statistika.php" class="menuButton" id="statistika">Statistika</a>
         </div>
			
         <div class="rightside" id="logInOut"> 				
            <fb:login-button autologoutlink='true' scope='public_profile,email' onlogin='checkLoginState();window.location.reload();'></fb:login-button>
         </div>			
			
         <br class="cb">
         
      </div>


      <div id='content'>
      
         <div id='contentWrapper'>
            <div id='mainLeftContent'>
               <div class='subContent'>
                  <p>Siia tuleb "HĆ¤Ć¤letama" nupp</p>
               </div>
               <div class="lisaKandidaadiks" class='subContent' >
               	<a href="lisaKandidaadiks.php" class="menuButton" id="lisaKandidaadiks">Lisa kandidaadiks</a>
               </div>
            </div>

            <div id="mainRightContent">
					 <div class='subContent'>
              		 <div class="sisu" id="loadContent">
							<p id="h3"> 
							</p>
							 <?php 
							include 'dbcon.php';

    						// Retrieve data
    						$sql_select = "SELECT * FROM kandidaadid";
    						$stmt = $conn->query($sql_select);
    						$kandidaadid = $stmt->fetchAll(); 
    
    
    						echo '<div id="laadimiseks">';
    
	 						echo	'Kandidaadid piirkonna järgi: ';
	 						echo '<select name="valiPiirkond" id="valiPiirkond">';
  	 						echo			'<option id="piirkond" value="piirkond">Piirkond</option>';
  							echo			'<option id="tallinn" value="tallinn">Tallinn</option>';
  	 						echo			'<option id="tartu" value="tartu">Tartu</option>';
  	 						echo			'<option id="narva" value="narva">Narva</option>';
	 						echo	'</select>';
    
    
    						echo '<div id="siiatulebkraam">';
    
    							if(count($kandidaadid) > 0) {
    	  
        						echo "<h2>Kandidaadid</h2>";
        						echo "<table id='kandidaadidTabel'>";
        						echo "<tr><th>Eesnimi</th>";
        						echo "<th>Perenimi</th>";
        						echo "<th>Piirkond</th>";
        						echo "<th>Erakond</th></tr>";
        						foreach($kandidaadid as $kandidaat) {
            					echo "<tr><td>".$kandidaat['eesnimi']."</td>";
            					echo "<td>".$kandidaat['perenimi']."</td>";
            					echo "<td>".$kandidaat['piirkond']."</td>";
            					echo "<td>".$kandidaat['erakond']."</td></tr>";
        						}
        						echo "</table>";
    							} else {
        						echo "<h3>Kandidaate pole.</h3>";
    							}
    
    							echo '</div>';
    							echo '</div>';	
    																		
							 ?>
               	</div>	
               </div>
            </div>
            <br class="cb">
         </div>
         
      </div>

      <div id='footer'>
      
         <div id='footerInfoWrapper'>
            <div id='footerInfoContainer'>
               <p>
                  Inff <br> Telefon: 51234567 <br> 
                  E-mail: inff@inff.ee
               </p>
            </div>
            <br class="cb">
         </div>
         
      </div>

   </div>

</body>

</html>
