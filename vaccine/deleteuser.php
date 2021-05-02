<?php
  	session_start();
	include 'connection.php';

  	$vkey = $_GET['t'];

  	$sql2 = "update tb_vaccinereg set phone='NULL' where vkey='".$vkey."'";
  	$ex2=mysqli_query($conn,$sql2);

  	if($ex2)
	{
    	echo "<SCRIPT type='text/javascript'>alert('User Details Deleted');window.location.replace(\"viewidcard.php\"); </SCRIPT>";
	}
	else
	{
    	echo "<SCRIPT type='text/javascript'>alert('Deletion Failed');window.location.replace(\"viewidcard.php\");</SCRIPT>";
  	}

?>
