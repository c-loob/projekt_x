<?php

	 include 'dbcon.php';
    
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
    
    header('location:index.php');
?>