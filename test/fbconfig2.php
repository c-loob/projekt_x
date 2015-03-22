
         
<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphUser;
$appid= '1604288763142467';
$appsecret='384c4b2abee1541bf37ba338439de210';

// init app with app id and secret
FacebookSession::setDefaultApplication( $appid,$appsecret );
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper('http://localhost/test2/fbconfig2.php' );

// see if we have a session
if ( isset( $_SESSION) && isset( $_session['fb_token'] ) ) {
  // check if access token already set
  $session = new FacebookSession( $_session['fb_token']);
  try{
  	if ( !$session->validate()){
  		$session=null;
  	}
  }catch(Exception $e){
  	$session= null;
  }
}

if (!isset($session) || $session===null){
	try{
		$session = $helper->getSessionFromRedirect();
	} catch( FacebookRequestException $ex){
		print_r($ex);
	}
}

// see if we have a session
if ( isset( $session ) ) {
	// save the session
	$_SESSION['fb_token'] = $session->getToken();
	// create a session using saved token or the new one we generated at login
	$session = new FacebookSession( $session->getToken() );
	// graph api request for user data
	$request = new FacebookRequest( $session, 'GET', '/me' );
	$response = $request->execute();
	// get response
	$graphObject = $response->getGraphObject()->asArray();
	// print profile data
	echo '<pre>' . print_r( $graphObject, 1 ) . '</pre>';
	
	// print logout url using session and redirect_uri (logout.php page should destroy the session)
	echo '<a href="' . $helper->getLogoutUrl( $session, 'http://yourwebsite.com/app/logout.php' ) . '">Logout</a>';
} else {
	// show login url
	echo '<a href="' . $helper->getLoginUrl( array( 'email', 'user_friends' ) ) . '">Login</a>';
}
?>