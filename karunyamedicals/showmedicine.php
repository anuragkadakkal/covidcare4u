<?php
  session_start();
include 'connection.php';

  $fkey = $_GET['t'];
  $status = 1;
  $sql = "update tb_medicinereg set fstatus='".$status."' where fkey='".$fkey."'";//echo $sql;exit;
  $ex2=mysqli_query($conn,$sql);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Medicine Details Marked as Visible');window.location.replace(\"viewmedicines.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Request Failed');window.location.replace(\"viewmedicines.php\");</SCRIPT>";
  }

?>
