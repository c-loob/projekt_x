<?php 
function AfterLogin(){//kui toimub logimise olekumuutus
	window.location.reload();
	//if(!isset($_COOKIE['fb_token'])) {
		$eesnimi = $_SESSION['user_firstname'];
		$perenimi = $_SESSION['user_lastname'];
	//lisatakse kasutajate tabelisse kui pole juba lisatud
		$sql_insert = "IF NOT EXISTS (SELECT * FROM Kasutajad WHERE eesnimi = '$eesnimi' AND perenimi = '$perenimi')
			BEGIN
				INSERT INTO Kasutajad (eesnimi, perenimi) VALUES ('$eesnimi', '$perenimi') 
			END";

}

include_once 'autoload.php';
	use Facebook\FacebookSession;
	use Facebook\FacebookRequest;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\FacebookJavaScriptLoginHelper;
	//$session = new FacebookSession($_COOKIE['fb_token']);
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
	echo 'cookie not set';
	//die();
}

	// I'm already logged in
	if (isset($_SESSION['user_id'])){
		if($_SESSION['user_id'] !== false) {
			echo 'tere ' . $_SESSION['user_firstname'].'<br>';
			$obj->message = 'Already logged in';
			//die();
		}
	}
	FacebookSession::setDefaultApplication('1604288763142467', '384c4b2abee1541bf37ba338439de210');
	
	
	// bind the JavaScript SDK session token with the PHP SDK
	if (isset($_COOKIE['fb_token'])){//following ONLY IF COOKIE IS SET
	$session = new FacebookSession($_COOKIE['fb_token']);
	
	// in case someone manually changed the cookie
	// or the session expired...
	try {
		$session->validate();
		//include 'index3.php';
	} catch (FacebookRequestException $ex) {
		$obj->status = false;
		$obj->message = 'Invalid facebook session';
		$obj->more = $ex->getMessage();
		//echo 'tere catch1';
		//die(json_encode($obj));
	} catch (\Exception $ex) {
		$obj->status = false;
		$obj->message = 'Graph API error';
		$obj->more = $ex->getMessage();
		//echo 'terecatch2';
		//die(json_encode($obj));
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
		//die(json_encode($obj));
	} catch (\Exception $ex) {
		$obj->status = false;
		$obj->message = 'Generic Facebook error';
		//die(json_encode($obj));
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
	//echo $user->name;//suva asi
	$obj->message = 'Logged in';
	//echo json_encode($obj);
	}
?>
