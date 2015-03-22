<!DOCTYPE html>
<head>
   <Title>Projektx - Valime Parimat</Title>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="scripts.js"></script>
   <script src="js.js" type="text/javascript"></script>
</head>

<body>

   <div id='mainWrapper'>

      <div id='header'>
			
         <div class='logoWrapper'>
            <!--<img id='logo' src="css/images/logoUus.png">-->
         </div>
			
         <div class='leftside' id='navigationWrapper'>
            <button class="menuButton" id="kandidaadid">Kandidaadid</button>
            <button class="menuButton" id="tulemused">Tulemused</button>
            <button class="menuButton" id="statistika">Statistika</button>
         </div>
			
         <div class="rightside" id="logInOut"> 				
            <fb:login-button autologoutlink="true" scope="public_profile,email" onlogin="checkLoginState();window.location.reload();"></fb:login-button>
         </div>			
			
         <br class="cb">
         
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
<?php
			//pärast <fb:login> nuppu 
			include_once 'login.php'; //pärast seda ei displeita allolevat kui välja logitud
			//asukoht muidu suva
			?>
            <div id="mainRightContent">
					 <div class='subContent'>
              		 <div id="loadContent">
							<p id="h3"> 
								Tere tulemast valima!							
							</p>
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

