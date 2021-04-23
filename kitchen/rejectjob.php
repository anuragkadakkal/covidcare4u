<?php
  session_start();
  include 'connection.php';

  $jobkey = $_GET['t'];
  $status = 2;

  $sql2 = "update tb_jobs set jstatus='".$status."' where jkey='".$jobkey."'";
  $ex2=mysqli_query($conn,$sql2);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Jobs Vacancy Rejected');window.location.replace(\"jobrequests.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Jobs Vacancy Rejection Failed');window.location.replace(\"jobrequests.php\");</SCRIPT>";
  }

?>
