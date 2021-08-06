<?php

	$conn=mysqli_connect('localhost','root','') or die(mysql_error());  
                mysqli_select_db($conn,"sparks_bank")or die (mysqli_error($conn));

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>