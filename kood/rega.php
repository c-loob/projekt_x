<?php
	include 'dbcon.php';
    	include 'login.php';
    // Salvesta info
    echo "0";
    try {
    	echo "1";
        $eesnimi = $_SESSION['user_firstname'];
        $perenimi = $_SESSION['user_lastname'];
        // Info andmebaasi
        echo "2";
        $sql_insert = "INSERT INTO kasutajad (eesnimi, perenimi) 
                   VALUES (?,?)";
        $stmt = $conn->prepare($sql_insert);
        echo "3";
        $stmt->bindValue(1, '$eesnimi');
        $stmt->bindValue(2, '$perenimi');
        $stmt->execute();
        echo "fin";
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
    echo "tops";
    closemysql();
    header('location:index.php');
?>
