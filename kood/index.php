<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" 
"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>Projektx - Valime Parimat</title>
   
   <link rel="stylesheet" type="text/css" href="styles.css"></link>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
   <script src="scripts.js" type="text/javascript"></script>
   <script src="js.js" type="text/javascript"></script>
</head>

<body>

   <div id='mainWrapper'>
	
      <div id='header'>
			<fb:login-button autologoutlink='true' scope='public_profile,email' onlogin='checkLoginState();window.location.reload();'></fb:login-button>
					
         <div class='logoWrapper'>
            <!--<img id='logo' src="css/images/logoUus.png">-->
         </div>
			
         <div class='leftside' id='navigationWrapper'>
            <button class="menuButton" id="kandidaadid">Kandidaadid</button>
            <button class="menuButton" id="tulemused">Tulemused</button>
            <button class="menuButton" id="statistika">Statistika</button>
         </div>
			
         <div class="rightside" id="logInOut"> 				
         </div>			
			
         <br class="cb"></br>
         
      </div>


      <div id='content'>
      
         <div id='contentWrapper'>
            <div id='mainLeftContent'>
               <div class='subContent'>
                  <p>Siia tuleb "HÃ¤Ã¤letama" nupp</p>
               </div>
               <div class='subContent'>
                  <button class="menuButton" id="lisaKandidaadiks">Lisa kandidaadiks</button>
               </div>
            </div>

            <div id="mainRightContent">
					 <div class='subContent'>
              		 <div id="loadContent">
							<p id="h3"> 
								Tere tulemast valima!							
							</p>
               	</div>	
               </div>
            </div>
            <br class="cb"></br>
         </div>
         
      </div>

      <div id='footer'>
      
         <div id='footerInfoWrapper'>
            <div id='footerInfoContainer'>
               <p>
                  Inff <br></br>
                  Telefon: 51234567 <br></br> 
                  E-mail: inff@inff.ee
               </p>
            </div>
            <br class="cb"></br>
         </div>
         
      </div>

   </div>

</body>

</html>
<?php
//pärast <fb:login> nuppu 
include_once 'login.php'; //pärast seda ei displeita allolevat kui välja logitud
//asukoht muidu suva
?>
