<?php
  session_start();
	include 'connection.php';

  $engkey = $_GET['t'];
	$sql = "select loginid from tb_engineerreg where engkey='".$engkey."'";
	$ex1=mysqli_query($conn,$sql);

	while ($row=mysqli_fetch_array($ex1))
	{
		$id=$row['loginid'];
	}
	$status =1;

  $sql2 = "update tb_login set delstatus='".$status."' where id='".$id."'";
  $ex2=mysqli_query($conn,$sql2);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Engineer Details Deleted');window.location.replace(\"viewksebengineer.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Engineer Details Not Deleted .');window.location.replace(\"viewksebengineer.php\");</SCRIPT>";
  }

?>
