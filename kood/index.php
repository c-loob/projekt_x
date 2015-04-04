 <?php 
 include 'login.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" 
"http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"> 
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

   <div id='mainWrapper'>
		<script>
		if(typeof(EventSource) !== "undefined") {
			var source = new EventSource("send_sse.php");
			source.onmessage = function(event) {
			document.getElementById("result").innerHTML = event.data;
			};
			} else {
			document.getElementById("result").innerHTML = "Valimised lõppevad 28. juunil 2015 kell 20:00";
			}

		</script>
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
                  <p>Siia tuleb "HÃ¤Ã¤letama" nupp</p>
               </div>
               <div class="lisaKandidaadiks" class='subContent' >
               	<a href="lisaKandidaadiks.php" class="menuButton" id="lisaKandidaadiks">Lisa kandidaadiks</a>
               </div>
            </div>

            <div id="mainRightContent">
					 <div class='subContent'>
              		 <div class="sisu" id="loadContent">
							<p id="h3"> 
							<?php 
							if(isset($_COOKIE['fb_token'])){//siia läheb sisseloginutele?>
							Tere tulemast valima, <?php echo $_SESSION['user_firstname'];?>!
							<?php 
 								
 							}else{//siia teistele?>
 								Tere tulemast valima, logi sisse!
 								<?php 
 							}
 							?>
															
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

