<?php
  session_start();
	include 'connection.php';

  	$drnotkey = $_GET['t'];

  	$sql2 = "update tb_drnotify set notstatus='1' where drnotkey='".$drnotkey."'";
  	$ex2=mysqli_query($conn,$sql2);

  	if($ex2)
	{
    	echo "<SCRIPT type='text/javascript'>window.location.replace(\"viewnotifications.php\"); </SCRIPT>";
	}
	else
	{
    	echo "<SCRIPT type='text/javascript'>window.location.replace(\"viewnotifications.php\");</SCRIPT>";
  	}

?>
