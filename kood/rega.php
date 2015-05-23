000

<?php
	
	include 'dbcon.php';
	?>10100<?php
    	include 'login.php';
    // Salvesta info
    ?> 0
    <?php
    try {
    	?>1<?php
        $eesnimi = $_SESSION['user_firstname'];
        $perenimi = $_SESSION['user_lastname'];
        // Info andmebaasi
        ?>2<?php
        $sql_insert = "INSERT INTO kasutajad (eesnimi, perenimi) 
                   VALUES (?,?)";
        $stmt = $conn->prepare($sql_insert);
        ?>3<?php
        $stmt->bindValue(1, '$eesnimi');
        $stmt->bindValue(2, '$perenimi');
        $stmt->execute();
       ?>4<?php
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
    ?>5<?php
    closemysql();
    header('location:index.php');
?>
