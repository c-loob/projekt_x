<?php
/*
	 include 'dbcon.php';
    
    // Retrieve data
    $sql_select = "SELECT kandidaadid.erakond, kandidaadid.haali FROM kandidaadid INNER JOIN erakonnad ON kandidaadid.erakond=erakonnad.nimi";
    $stmt = $conn->query($sql_select);
    $kandidaadid = $stmt->fetchAll(); 
	 echo $kandidaadid;


    
    echo '<div id="laadimiseks">';
    
    if(count($kandidaadid) > 0) {
    	  
        echo "<h2>Kandidaadid</h2>";
        echo "<table>";
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
*/
?>