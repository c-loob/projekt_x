<?php

	 header("Content-type: application/json");
	 
	 include 'dbcon.php';
	 
    $prk = $_GET['id'];
    
	 if($prk=="piirkond") {
		
	   $sql_select = "SELECT * FROM kandidaadid";
    	$stmt = $conn->query($sql_select);
    	$kandidaadid = $stmt->fetchAll(); 
    
	 	echo json_encode($kandidaadid);
	 }    
    
    
	 else {    
    
    $sql_select = "SELECT * FROM kandidaadid WHERE piirkond = '".$prk."'";
    $stmt = $conn->query($sql_select);
    $kandidaadid = $stmt->fetchAll(); 
    
	 echo json_encode($kandidaadid);
	 }
?>