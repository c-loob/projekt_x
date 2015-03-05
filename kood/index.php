<!DOCTYPE html>
<head>
   <Title>Projektx - Valime Parimat</Title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="scripts.js"></script>

</head>

<body>

   <div id='mainWrapper'>

      <div id='header'>
			
         <div class='logoWrapper'>
            <img id='logo' src="css/images/logoUus.png">
         </div>
			
         <div class='leftside' id='navigationWrapper'>
            <button class="menuButton" id="kandidaadid">Kandidaadid</button>
            <button class="menuButton" id="tulemused">Tulemused</button>
            <button class="menuButton" id="statistika">Statistika</button>
         </div>
			
         <div class="rightside" id="logInOut"> 				
            <button class="menuButton" id="login">Logi sisse</button>
         </div>			
			
         <br clear="all" />
         
      </div>


      <div id='content'>
      
         <div id='contentWrapper'>
            <div id='mainLeftContent'>
               <div id='subContent'>
                  <p>Siia tuleb "Hääletama" nupp</p>
               </div>
               <div id='subContent'>
                  <p>Siia tuleb "Lisa kandidaadiks nupp"</p>
               </div>
            </div>

            <div id="mainRightContent">
					 <div id='subContent'>
              		 <div id="loadContent">
                  	<h2>Registreeri kandidaadiks</h2>
                  	<form method="post" action="lisaKandidaadiks.php" enctype="multipart/form-data" >
                     	<table>
                        	<tr> <td>Eesnimi</td>  <td><input type="text" name="eesnimi" id="eesnimi"/></td>   </tr>
                        	<tr> <td>Perenimi</td> <td><input type="text" name="perenimi" id="perenimi"/></td> </tr>
                        	<tr> <td>Piirkond</td> <td><input type="text" name="piirkond" id="piirkond"/></td> </tr>
                        	<tr> <td>Erakond</td>  <td><input type="text" name="erakond" id="erakond"/></td>   </tr>
                     	</table>     
                     	<input class="menuButton" type="submit" name="registreeri" value="Registreeri" /> 					
                  	</form>
               	</div>	
               </div>
            </div>
            <br clear="all" />
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
            <br clear="all" />
         </div>
         
      </div>

   </div>

</body>

</html>

