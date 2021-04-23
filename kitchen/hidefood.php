<?php
  session_start();
include 'connection.php';

  $fkey = $_GET['t'];
  $status = 0;
  $sql = "update tb_foodreg set fstatus='".$status."' where fkey='".$fkey."'";//echo $sql;exit;
  $ex2=mysqli_query($conn,$sql);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Food Details Marked as Hidden');window.location.replace(\"viewfoods.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Request Failed');window.location.replace(\"viewfoods.php\");</SCRIPT>";
  }

?>
