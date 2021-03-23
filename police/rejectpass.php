<?php
    session_start();
	include 'connection.php';

    $id = $_GET['t'];
	$status = 2;
	$sql2 = "update tb_vehiclepass set status='".$status."',feedback='Rejected' where passkey='".$id."'";
	$ex2=mysqli_query($conn,$sql2);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Pass Rejected');window.location.replace(\"viewtravelpass.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Failed');window.location.replace(\"viewtravelpass.php\");</SCRIPT>";
	}

?>
