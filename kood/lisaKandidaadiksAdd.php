<?php

	 include 'dbcon.php';
    	include 'login.php';
    	
    
    // Salvesta info
    if(!empty($_POST)) {
    try {
        $eesnimi = $_SESSION['user_firstname'];
        $perenimi = $_SESSION['user_lastname'];
        $uid = $_SESSION['user_id'];
        $piirkond = $_POST['piirkond'];
        $erakond = $_POST['erakond'];
        // Info andmebaasi
        
        $sql_insert = "REPLACE INTO kandidaadid SET eesnimi=?, perenimi=?, piirkond=?, erakond=?, haali=0, uid=?"; 
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $eesnimi);
        $stmt->bindValue(2, $perenimi);
        $stmt->bindValue(3, $piirkond);
        $stmt->bindValue(4, $erakond);
        $stmt->bindValue(5, $uid);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
    }
    closemysql();
    header('location:index.php');
?>
