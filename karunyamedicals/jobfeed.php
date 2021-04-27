<?php
  session_start();
  include 'connection.php';

  $jobkey = $_GET['t'];

  $sql2 = "update tb_jobs set jfeedback='".trim($_POST['feedback'])."' where jkey='".$jobkey."'";
  $ex2=mysqli_query($conn,$sql2);


  if($ex2)
	{
    echo "<SCRIPT type='text/javascript'>alert('Feedback Posted Successfully');window.location.replace(\"jobrequests.php\"); </SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Feedback Posting Failed');window.location.replace(\"jobrequests.php\");</SCRIPT>";
  }

?>
