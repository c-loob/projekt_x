<?php

	 include 'dbcon.php';
    
    // Retrieve data
    $sql_select = "SELECT kandidaadid.erakond, SUM(kandidaadid.haali) AS haali FROM kandidaadid INNER JOIN erakonnad ON kandidaadid.erakond=erakonnad.nimi GROUP BY kandidaadid.erakond ORDER BY haali DESC";
    $stmt = $conn->query($sql_select);
    $kandidaadid = $stmt->fetchAll(); 
    
    echo '<div id="erakHaalteArv">';
    
    if(count($kandidaadid) > 0) {
    	  
        echo "<h2>Kandidaadid</h2>";
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