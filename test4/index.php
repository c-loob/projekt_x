
<html>
<head>
<title>Projektx - Valime Parimat</title>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">
<link rel="stylesheet" type="text/css" href="styles.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="js.js" type="text/javascript"></script>
 <script src="scripts.js"></script>

</head>

<fb:login-button autologoutlink="true" scope="public_profile,email" onlogin="checkLoginState();window.location.reload();"></fb:login-button>

<?php
//pärast <fb:login> nuppu 
include_once 'newfile.php'; //login.php tulevikus

echo '<br><br>'.'tere jälle, ' . $_SESSION['user_firstname'].'<br>';
?>


<br>oii

</body>
</html>