<?php
  	session_start();
	include 'connection.php';

  	$engkey = $_GET['t'];
	$sql = "select loginid from tb_ambulance where ambkey='".$engkey."'";
	$ex1=mysqli_query($conn,$sql);

	while ($row=mysqli_fetch_array($ex1))
	{
		$id=$row['loginid'];
	}
	$status=1;

  	$sql2 = "update tb_login set status='".$status."' where id='".$id."'";
  	$ex2=mysqli_query($conn,$sql2);

  	if($ex2)
	{
    	echo "<SCRIPT type='text/javascript'>alert('Ambulance Registration Approved');window.location.replace(\"viewambulancerequest.php\"); </SCRIPT>";
	}
	else
	{
    	echo "<SCRIPT type='text/javascript'>alert('Updation Failed');window.location.replace(\"viewambulancerequest.php\");</SCRIPT>";
  	}

?>
