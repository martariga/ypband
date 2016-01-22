<?php  
  
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
  
  
  	$user=$dbhandle->real_escape_string($_POST['nomeUtente']);
    $pass=$dbhandle->real_escape_string($_POST['password']);
    $mail=$dbhandle->real_escape_string($_POST['mail']);
		include ('config.php');
		$query = ("insert into users (username,password,email) values ('$_POST[nomeUtente]','$_POST[password]','$_POST[mail]')"); 
		$res = mysqli_query($dbhandle,$query) or die ("Hai sbagliato la query");;
		
		if(!$res)
		{
			echo("persona non inserita");
		}
		else
		{
			echo("persona inserita");
		}
		mysqli_close($dbhandle);
   

   
  

?>