<?php

//Database=projektAThE2oaEU;Data Source=eu-cdbr-azure-north-b.cloudapp.net;User Id=b0ba2e80b41140;Password=1b2b163b

    // DB connection info
    //TODO: Update the values for $host, $user, $pwd, and $db
    //using the values you retrieved earlier from the portal.
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
    
    function closemysql() {
    		$conn = null;
		}
    
?>