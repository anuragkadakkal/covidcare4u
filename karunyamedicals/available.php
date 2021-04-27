<?php
  session_start();
include 'connection.php';

  $fkey = $_GET['t'];
  $status = 1;
  $sql = "update tb_medicine set status='".$status."' where filekey='".$fkey."'";//echo $sql;exit;
  $ex2=mysqli_query($conn,$sql);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>window.location.replace(\"vieworders.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Status Updation Failed');window.location.replace(\"vieworders.php\");</SCRIPT>";
  }

?>
