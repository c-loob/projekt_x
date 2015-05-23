<?php
	
	include 'dbcon.php';
    	include 'login.php';
    // Salvesta info
    try {
        $eesnimi = $_SESSION['user_firstname'];
        $perenimi = $_SESSION['user_lastname'];
        // Info andmebaasi
        $sql_insert = "INSERT INTO kasutajad (eesnimi, perenimi) 
                   VALUES (?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $eesnimi);
        $stmt->bindValue(2, $perenimi);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
    closemysql();
    //header('location:index.php');
?>
