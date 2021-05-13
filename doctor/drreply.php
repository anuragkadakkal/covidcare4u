<?php
    session_start();
    include 'connection.php';

    $msg = $_POST['msg'];
    $notkey = $_POST['notkey'];


    $sql="update tb_drnotify set notfeedback='".$msg."',notstatus='2' where drnotkey='".$notkey."' ";
    //echo $sql;exit;
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>alert('Reply Sent Successfully');
        window.location.replace(\"viewnotifications.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Reply Sending Failed');
       window.location.replace(\"viewnotifications.php\");
       </SCRIPT>";
    }

?>