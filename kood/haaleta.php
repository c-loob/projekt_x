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
   <script async src="js.js" type="text/javascript"></script>
</head>
	
<body>
    <?php 
 		include 'login.php';
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
              			<li><a href="erakondadehaaltearv.php" class="btn btn-lg btn-default" id="erakondadehaaltearv">Tulemused</a></li>
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
      		<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
           			 <li><a href="haaleta.php" class="btn btn-lg btn-default" id="haaleta">Hääleta</a></li>
            		 <li><a href="lisaKandidaadiks.php" class="btn btn-lg btn-default " id="lisaKandidaadiks">Lisa kandidaadiks</a></li>
          		</ul>      	       
            </div>
            
				<div class="col-sm-8 blog-main">
              		 <div class="sisu jumbotron" id="loadContent">
							<?php
							
								include 'dbcon.php';

    							// Retrieve data
    							$sql_select = "SELECT * FROM kandidaadid";
    							$stmt = $conn->query($sql_select);
    							$kandidaadid = $stmt->fetchAll(); 
    						
								if(isset($_COOKIE['fb_token'])){
    							echo '<div id="laadimiseks">';
      						echo '<h3>Hääletamiseks vajuta kandidaadile ning nuppu "Hääleta"</h3>';
      						echo '<div id="siiatulebkraam">';
    
    							if(count($kandidaadid) > 0) {
        						echo '<div class="table-responsive">';
        						echo '<table class="table table-striped" id="haaletaTabel">';
        						echo "<thead>";
        						echo "<tr><th>Eesnimi</th>";
        						echo "<th>Perenimi</th>";
        						echo "<th>Piirkond</th>";
        						echo "<th>Erakond</th></tr>";
        						echo "</thead>";
        						echo "<tbody>";
        						foreach($kandidaadid as $kandidaat) {
            					echo "<tr id=".$kandidaat['id']."><td>".$kandidaat['eesnimi']."</td>";
            					echo "<td>".$kandidaat['perenimi']."</td>";
            					echo "<td>".$kandidaat['piirkond']."</td>";
            					echo "<td>".$kandidaat['erakond']."</td></tr>";
        						}
        						echo "</tbody>";
        						echo "</table>";
    							} else {
        						echo "<h3>Kandidaate pole.</h3>";
    							}
    
    							echo '</div>';
    							echo '</div>	';
    							
    						
    						echo '<h3>Valitud kandidaat</h3>';
    						echo '<form name="annaHaal" id="annaHaal" method="post" action="annaHaal.php" enctype="multipart/form-data">
  									<fieldset>
  									
   								<div class="form-group">
      								<label for="Eesnimi">Eesnimi</label>
      								<input type="text" name="Eesnimi" id="Eesnimi" class="form-control" placeholder="Eesnimi" readonly>
    								</div>
    								
    								<div class="form-group">
      								<label for="Perenimi">Perenimi</label>
      								<input type="text" name="Perenimi" id="Perenimi" class="form-control" placeholder="Perenimi" readonly>
    								</div>
    								
    								<div class="form-group">
      								<label for="Piirkond">Piirkond</label>
      								<input type="text" name="Piirkond" id="Piirkond" class="form-control" placeholder="Piirkond" readonly> 
    								</div>
    								
    								<div class="form-group">
      								<label for="Erakond">Erakond</label>
      								<input type="text" name="Erakond" id="Erakond" class="form-control" placeholder="Erakond" readonly>
    								</div>
  									</fieldset>
  									<button type="submit" class="btn btn-primary" name="annaHaal" value="annaHaal">Hääleta</button>
									</form>';
    						echo '</div>';
    						}
    						
    						
    						
    						else{    //siia teistele
    						echo  '<p id="h3"> ';
 							echo	'Hääle andmiseks logi sisse!';
							echo  '</p>';
 							}
						 ?>
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

