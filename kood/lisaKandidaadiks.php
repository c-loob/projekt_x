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
    
    // Salvesta info
    if(!empty($_POST)) {
    try {
        $eesnimi = $_POST['eesnimi'];
        $perenimi = $_POST['perenimi'];
        $piirkond = $_POST['piirkond'];
        $erakond = $_POST['erakond'];
        // Info andmebaasi
        $sql_insert = "INSERT INTO kandidaadid (eesnimi, perenimi, piirkond, erakond) 
                   VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $eesnimi);
        $stmt->bindValue(2, $perenimi);
        $stmt->bindValue(3, $piirkond);
        $stmt->bindValue(4, $erakond);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
    }
/*    // Retrieve data
    $sql_select = "SELECT * FROM registration_tbl";
    $stmt = $conn->query($sql_select);
    $registrants = $stmt->fetchAll(); 
    if(count($registrants) > 0) {
        echo "<h2>People who are registered:</h2>";
        echo "<table>";
        echo "<tr><th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Date</th></tr>";
        foreach($registrants as $registrant) {
            echo "<tr><td>".$registrant['name']."</td>";
            echo "<td>".$registrant['email']."</td>";
            echo "<td>".$registrant['date']."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>No one is currently registered.</h3>";
    }*/
    
    header('location:index.php');
?>