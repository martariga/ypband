<?php
	$myServer = "localhost";
	$myUser ="ypband";
	$myPass ="";
	$myDB ="my_ypband";

	// connssione
	$dbhandle = mysqli_connect ($myServer,$myUser,$myPass,$myDB)
      or die("Couldn't connect to SQL Server on $myServer");
	  
	// seleziona database
	//$selected =mysqli_select_db($myDB,$dbhandle)
	//	 or die ("coudnt open database $myDB");
?>
