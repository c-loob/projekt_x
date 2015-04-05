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
               	<a href="lisaKandidaadiks.php" class="menuButtonClicked" id="lisaKandidaadiks">Lisa kandidaadiks</a>
               </div>
            </div>

            <div id="mainRightContent">
					 <div class='subContent'>
              		 <div class="sisu" id="loadContent">
							<p id="h3"> 
							</p>
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
