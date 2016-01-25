<?php  
  include ('config.php');
  if(!isset($_SESSION))
  {
     session_start();
  }


  if(isset($_SESSION["username"]))
  {
 	 echo "<script>window.location.href='index.html';</script>";
     echo "<script>alert('sei già loggato');</script>";
 	 return;
  }
  
  
  	$user=$dbhandle->real_escape_string($_POST['nomeUtente']);
    $pass=md5($_POST['password']);
    $mail=$dbhandle->real_escape_string($_POST['mail']);
    $name=$dbhandle->real_escape_string($_POST['Nome']);
    $surname=$dbhandle->real_escape_string($_POST['Cognome']);
    $comune=$dbhandle->real_escape_string($_POST['Comune']);
    if($user==NULL || $pass==NULL || $mail==NULL || $name==NULL || $surname==NULL || $comune==NULL)
	{
    		echo("warning:riempi tutti i campi");
            echo "<BR><a href=\"http://ypband.altervista.org/login/registrazione.html\"> torna alla registrazione </a>";
    }
    else
    {
		$query = ("insert into users (username,password,email,nome,cognome,comune) values ('$user','$pass','$mail','$name','$surname','$comune')"); 
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
   
	}
   
  

?>
  

