<?php
  session_start();
	include 'connection.php';

  	$engkey = $_GET['t'];
	$sql = "select loginid from tb_phc where phckey='".$engkey."'";
	$ex1=mysqli_query($conn,$sql);

	while ($row=mysqli_fetch_array($ex1))
	{
		$id=$row['loginid'];
	}
	$status=2;

  	$sql2 = "update tb_login set status='".$status."' where id='".$id."'";
  	$ex2=mysqli_query($conn,$sql2);

  	if($ex2)
	{
    	echo "<SCRIPT type='text/javascript'>alert('PHC Deactivated');window.location.replace(\"viewphc.php\"); </SCRIPT>";
	}
	else
	{
    	echo "<SCRIPT type='text/javascript'>alert('Updation Failed');window.location.replace(\"viewphc.php\");</SCRIPT>";
  	}

?>
