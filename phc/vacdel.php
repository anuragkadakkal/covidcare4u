<?php
	session_start();
	include 'connection.php';

	$vkey = $_GET['t'];
	$vcount = 0;

	$sql3 = "update tb_vaccine set vtotal='".$vcount."' where vkey='".$vkey."'";
	//echo $sql3;exit;
	$ex2=mysqli_query($conn,$sql3);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Vaccine Details Deleted Successfully');window.location.replace(\"viewvac.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Deletetion Failed.');window.location.replace(\"viewvac.php\");</SCRIPT>";
	}

?>
