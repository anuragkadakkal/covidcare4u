<?php
  session_start();
	include 'connection.php';

  $filekey = $_GET['t'];
$status =2;

  $sql2 = "update tb_food set status='".$status."', feedback='Order Canceled by User' where filekey='".$filekey."'";
  $ex2=mysqli_query($conn,$sql2);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Order Cancelled');window.location.replace(\"orderfoodstatus.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Order cancellation Failed');window.location.replace(\"orderfoodstatus.php\");</SCRIPT>";
  }

?>
