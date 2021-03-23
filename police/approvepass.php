<?php
    session_start();
	include 'connection.php';

    $id = $_GET['t'];
	$status = 1;
	$sql2 = "update tb_vehiclepass set status='".$status."',feedback='Approved' where passkey='".$id."'";
	$ex2=mysqli_query($conn,$sql2);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Pass Approved');window.location.replace(\"viewtravelpass.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Failed');window.location.replace(\"viewtravelpass.php\");</SCRIPT>";
	}

?>
