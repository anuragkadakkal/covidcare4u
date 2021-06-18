<?php
	session_start();
	include 'connection.php';

	$vkey = $_POST['vkey'];
	$vcount = $_POST['vcount'];
	$vdate = $_POST['vdate'];

	$sql3 = "update tb_vaccine set vtotal='".$vcount."',availdate='".$vdate."' where vkey='".$vkey."'";
	//echo $sql3;exit;
	$ex2=mysqli_query($conn,$sql3);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Vaccine Details Updated Successfully');window.location.replace(\"viewvac.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Failed.');window.location.replace(\"viewvac.php\");</SCRIPT>";
	}

?>
