<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
   <Title>Projektx - Valime Parimat</Title>
   <!-- Bootstrap -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href="styles.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">   
   
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="scripts.js"></script>
   <script src="js.js" type="text/javascript"></script>
</head>
	
<body>
    <?php 
 		
 		include 'rega.php';
 	
	 ?>
   <div id='mainWrapper' class="container">
      <div id='header'>
		 <script src="send_sse.js" type="text/javascript" ></script>
		 <div id="send_sse">
		 	<script type="text/javascript" src="send_sse.js"></script>
		 </div>
		 
		 <nav class="navbar navbar-default">
        		<div class="container-fluid">
          		<div class="navbar-header">
            		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              		<span class="sr-only">Toggle navigation</span>
            		</button>
            		<a class="navbar-brand" href="index.php">ProjektX</a>
          		</div>
          		<div id="navbar" class="navbar-collapse collapse">
            		<ul class="nav navbar-nav">
              			<li><a href="kandidaadid.php" class="btn btn-lg btn-default" id="kandidaadid">Kandidaadid</a></li>
              			<li><a href="tulemused.php" class="btn btn-lg btn-default" id="tulemused">Tulemused</a></li>
              			<li><a href="statistika.php" class="btn btn-lg btn-default" id="statistika">Statistika</a></li>
            		</ul>
            		<ul class="nav navbar-nav navbar-right">
            			<li><div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="true"></div></li>
            		</ul>
          		</div><!--/.nav-collapse -->
        		</div><!--/.container-fluid -->
      	</nav>		 
         <br class="cb">
      </div>
      
		<div id='contentWrapper' class="row">
      		<div class="col-sm-3 col-md-3 sidebar">
					<ul class="nav nav-sidebar">
           			 <li><a href="haaleta.php" class="btn btn-lg btn-default" id="haaleta">Hääleta</a></li>
            		 <li><a href="lisaKandidaadiks.php" class="btn btn-lg btn-default " id="lisaKandidaadiks">Lisa kandidaadiks</a></li>
          		</ul>      	       
            </div>
            
				<div class="col-sm-8 blog-main">
              		 <div class="sisu jumbotron" id="loadContent">
							<p id="h3"> 
							<?php 
							if(isset($_COOKIE['fb_token'])){   //siia lĆ¤heb sisseloginutele?
							echo 'Tere tulemast valima, '; 
							echo $_SESSION['user_firstname'];
							echo '!';	
							    
						 	}
 							
 							else{    //siia teistele
 							echo	'Tere tulemast valima, logi sisse!';

 							}
 							closemysql();
 							?>							
							</p>
               	</div>	
            </div>
            <br class="cb">
      </div>


      <div id="footer">
      
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
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
</body>

</html>

