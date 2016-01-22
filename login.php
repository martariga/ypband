<?php
include ('config.php');

if(!isset($_SESSION))
{
    session_start();  
}

if(isset($_SESSION["username"]))
 {
 	echo "<script>window.location.href='index.html';</script>";
    echo "<script>alert('sei già loggato');</script>"
 	return;
 }
 
if(isset($_POST['nomeUtente']) && isset($_POST['password']))
{
	$user=$dbhandle->real_escape_string($_POST['nomeUtente']);
    $pass=$dbhandle->real_escape_string($_POST['password']);
    
	$query = "select * from users where username='$user' and password='$pass'";
	$result = $dbhandle->query($query) or die ("Hai sbagliato la query: ".$query);
	$numRows = mysqli_num_rows($result);
    if($numRows==1)
    {
    	echo "sei loggato";
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        echo "<a href = \"esci.php\">esci</a>";
        
        echo "<a href = \"index.html\">home</a>";
    }
    else
    {
    	echo "errore";
    }
}

mysqli_close($dbhandle);

?>