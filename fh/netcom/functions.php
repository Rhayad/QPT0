<?php

/* 
braucht meine webapp eine eigene datenbank?

$db = mysqli_connect('localhost','xxxx','xxxx','xxxx');

if( ! $db ) die("no database");

mysqli_set_charset($db, "utf8");

*/



// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '107908582613300',
  'secret' => '9a385ea4ad185dc812cc175234732db9',
  'cookie' => true,
));
// We may or may not have this data based on a $_GET or $_COOKIE based session.
//
// If we get a session here, it means we found a correctly signed session using
// the Application Secret only Facebook and the Application know. We dont know
// if it is still valid until we make an API call using the session. A session
// can become invalid if it has already expired (should not be getting the
// session back in this case) or if the user logged out of Facebook.
$session = $facebook->getSession();

$me = null;
// Session based API call.
if ($session) {
  try {
    $uid = $facebook->getUser();
    $me = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
  }
}

if( $me ) {
    $user      = $me['id'];
    $user_name = $me['name'];
}

// login or logout url will be needed depending on current user state.
$loginUrl = $logoutUrl = null;

if ($me) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}
set_error_handler("exception_error_handler");


// ---------------------------- your functions here -----------------


?>
