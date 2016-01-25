<?php
if(!isset($_SESSION))
{
    session_start();  
}
// If you are using session_name("something"), don't forget it now!
// Unset all of the session variables.
if(isset($_SESSION["username"]))
 {
 	
	// If it's desired to kill the session, also delete the session cookie.
	// Note: This will destroy the session, and not just the session data!
	if (ini_get("session.use_cookies")) 
	{
	    $params = session_get_cookie_params();
	    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    	);
	}
	// Finally, destroy the session.
	session_destroy();
	echo "<script>window.location.href='index.html';</script>";
 }
 else
 {
 	echo"<script>alert(\"non sei loggato\n verrai reindirizzato alla pagina iniziale?\");</script>";
    echo "<script>window.location.href='index.html';</script>";
 }
$_SESSION = array();

?> 
