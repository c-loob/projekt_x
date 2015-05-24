<?php
	
	include 'dbcon.php';
    	include 'login.php';
    // Salvesta info
    if(isset($_COOKIE['fb_token'])){ 
	    try {
	        $eesnimi = $_SESSION['user_firstname'];
	        $perenimi = $_SESSION['user_lastname'];
	        $uid = $_SESSION['user_id'];
	        // Info andmebaasi
	       // $sql_insert = "INSERT INTO kasutajad (eesnimi, perenimi) 
	         //          VALUES (?,?)";
	        $sql_insert = "REPLACE INTO kasutajad SET eesnimi=?, perenimi=?, uid=?"; 
	        $stmt = $conn->prepare($sql_insert);
	        $stmt->bindValue(1, $eesnimi);
	        $stmt->bindValue(2, $perenimi);
	        $stmt->bindValue(3, $uid);
	        $stmt->execute();
	    }
	    catch(Exception $e) {
	        die(var_dump($e));
	    }
	    closemysql();
    };
    //header('location:index.php');
?>
