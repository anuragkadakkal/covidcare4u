<?php
  session_start();
  include 'connection.php';

  $jobkey = $_GET['t'];
  $status = 1;

  $sql2 = "update tb_jobs set jstatus='".$status."' where jkey='".$jobkey."'";
  $ex2=mysqli_query($conn,$sql2);

  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Jobs Vacancy Approved');window.location.replace(\"jobrequests.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Jobs Vacancy Approval Failed');window.location.replace(\"jobrequests.php\");</SCRIPT>";
  }

?>
