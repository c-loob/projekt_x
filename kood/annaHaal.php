<?php
    include 'dbcon.php';

    // Salvesta info
    if(!empty($_POST)) {
    try {
        $eesnimi = $_POST['Eesnimi'];
        $perenimi = $_POST['Perenimi'];
        $piirkond = $_POST['Piirkond'];
        $erakond = $_POST['Erakond'];
        echo "$eesnimi";
        echo "$perenimi";
        echo "$piirkond";
        echo "$erakond";
        
        // Info andmebaasi
        $sql_update = "UPDATE kandidaadid SET haali=haali+1 WHERE eesnimi=? and perenimi=? and piirkond=? and erakond=?";
        $stmt = $conn->prepare($sql_update);
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
    
    //header('location:index.php');
?>
