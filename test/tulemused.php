<?php
/*
	 include 'dbcon.php';
    
    // Retrieve data
    $sql_select = "SELECT * FROM kandidaadid";
    $stmt = $conn->query($sql_select);
    $kandidaadid = $stmt->fetchAll(); 
    
    echo '<div id="kandidaadid">';
    
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

	echo '<div id="tulemused">';
	echo 'Kraam tulemused.php-st';
	echo '</div>';

?>