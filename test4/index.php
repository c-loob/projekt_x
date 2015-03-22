<?php 
session_start();
?>
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

<fb:login-button autologoutlink="true" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>

<?php 
// use some namespaces
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphObject;
use Facebook\GraphUser;
use Facebook\FacebookJavaScriptLoginHelper;

// used to return json-encoded data
$obj = new StdClass();
// default status: true (success)
$obj->status = true;

// the facebook token cookie is not set
if(!isset($_COOKIE['fb_token'])) {//SIIIINN ON PROBLEEEM, ei kuva enam login/logout nuppu
    // logout ei tööta v dno dafuq nevermind, korras
    // unset all the session's variables
    session_unset();
	
    $obj->status = false;
    $obj->message = 'Logout';
    die(json_encode($obj));  
    
}

// I'm already logged in
if (isset($_SESSION['user_id'])){
if($_SESSION['user_id'] !== false) {
	echo 'tere ' . $_SESSION['user_firstname'].'<br>';
    $obj->message = 'Already logged in';
    die(json_encode($obj));
}
}
FacebookSession::setDefaultApplication('1604288763142467', '384c4b2abee1541bf37ba338439de210');
		

// bind the JavaScript SDK session token with the PHP SDK
$session = new FacebookSession($_COOKIE['fb_token']);

// in case someone manually changed the cookie
// or the session expired...
try {
	$session->validate();
} catch (FacebookRequestException $ex) {
	$obj->status = false;
	$obj->message = 'Invalid facebook session';
	$obj->more = $ex->getMessage();
	die(json_encode($obj));
} catch (\Exception $ex) {
	$obj->status = false;
	$obj->message = 'Graph API error';
	$obj->more = $ex->getMessage();
	die(json_encode($obj));
}

// session ok, retrieve data
try {
	$request = new FacebookRequest($session, 'GET', '/me');
	// this means: retrieve a GraphObject and cast it as a GraphUser (as /me returns a GraphUser object)
	$me = $request->execute()->getGraphObject(GraphUser::className());
} catch (FacebookRequestException $ex) {
	$obj->status = false;
	$obj->message = 'Facebook Request error';
	$obj->more = $ex->getMessage();
	die(json_encode($obj));
} catch (\Exception $ex) {
	$obj->status = false;
	$obj->message = 'Generic Facebook error';
	$obj->more = $ex->getMessage();
	die(json_encode($obj));
}

// setup the user object
$user = new StdClass();
$user->facebookId = $me->getId();
$user->name = $me->getName();
$user->firstName = $me->getFirstName();
$user->lastName = $me->getLastName();
$user->email = $me->getProperty('email');   // some properties don't have a specific method
$user->gender = $me->getProperty('gender'); // hint: var_dump($me)
$user->locale = $me->getProperty('locale');

// insert here the object in your database (insert on key exists update, for example)
// PDO, MySQLi, MongoClient...

// insert the user data in the session
// you can alternatively serialise the object and save it all in one $_SESSION variable

$_SESSION['user_id'] = $me->getId(); // the facebook user's id
$_SESSION['user_name'] = $user->name; // short of firstname lastname
$_SESSION['user_firstname'] = $user->firstName;
$_SESSION['user_lastname'] = $user->lastName;
$_SESSION['user_locale'] = $user->locale; // may be used to integrate a multi-language content system

/*kui sisse logitud, siis näitab, muidu mitte. vajab refreshi--asjade näitamine ajaxiga kuidagi?
kui kasutatakse die() funktsiooni varem, siis lõpetab kogu selle scripti täitmise
*/
echo $user->name;//suva asi
$obj->message = 'Logged in';
echo json_encode($obj);


?>





</body>
</html>