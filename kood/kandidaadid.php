<?php

//Database=projektAThE2oaEU;Data Source=eu-cdbr-azure-north-b.cloudapp.net;User Id=b0ba2e80b41140;Password=1b2b163b

    $host = "eu-cdbr-azure-north-b.cloudapp.net";
    $user = "b0ba2e80b41140";
    $pwd = "1b2b163b";
    $db = "projektAThE2oaEU";
    
    // Connect to database.
    try {
        $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch(Exception $e){
        die(var_dump($e));
    }
    
    // Retrieve data
    $sql_select = "SELECT * FROM kandidaadid";
    $stmt = $conn->query($sql_select);
    $kandidaadid = $stmt->fetchAll(); 
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
   
?>