<?php 
 include 'login.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" 
"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" manifest="site.manifest">
<head>
   <Title>Projektx - Valime Parimat</Title>
   <meta charset="UTF-8"> 
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="scripts.js"></script>
   <script src="facebook.js" type="text/javascript"></script>
</head>

<body>

   <div id='mainWrapper'>

      <div id='header'>
			
         <div class='logoWrapper'>
            <!--<img id='logo' src="css/images/logoUus.png">-->
         </div>
			
         <div class='leftside' id='navigationWrapper'>
            <a href="kandidaadid.php" class="menuButton" id="kandidaadid">Kandidaadid</a>
            <a href="erakondadehaaltearv.php" class="menuButtonClicked" id="erakondadehaaltearv">Tulemused</a>
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
    $sql_select = "SELECT kandidaadid.erakond, SUM(kandidaadid.haali) AS haali FROM kandidaadid INNER JOIN erakonnad ON kandidaadid.erakond=erakonnad.nimi GROUP BY kandidaadid.erakond ORDER BY haali DESC";
    $stmt = $conn->query($sql_select);
    $kandidaadid = $stmt->fetchAll(); 
    
    echo '<div id="laadimiseks">';
    
    if(count($kandidaadid) > 0) {
    	  
        echo "<h2>Hääled erakondade kaupa</h2>";
        echo "<table>";
        echo "<tr><th>Erakond</th>";
        echo "<th>Hääli</th></tr>";
        foreach($kandidaadid as $kandidaat) {
            echo "<tr><td>".$kandidaat['erakond']."</td>";
            echo "<td>".$kandidaat['haali']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>Kandidaate pole.</h3>";
    }
    
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
