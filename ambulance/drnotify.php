<?php
    session_start();
    include 'connection.php';

    $soskey = $_POST['soskey'];
    $msg = $_POST['msg'];
    $drvname = $_POST['drvname'];
    $phones = $_POST['phones'];

    $k1=md5(microtime());
    $k2=substr($k1,0,8);

    $msg = $_POST['msg'];
    $curdate=date("d-m-Y h:i:sa");
    $msg1=$curdate." - ".$msg;

    $_SESSION['msg']=$msg;
    $_SESSION['time']=$curdate;
    $_SESSION['emailid']=$_POST['email'];
    $_SESSION['phones']=$phones;

    $sql="update tb_sosambreg set feedback='".$msg1."' where soskey='".$soskey."' ";
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>
        window.location.replace(\"drmail.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Uploading Failed');
       window.location.replace(\"viewrequests.php\");
       </SCRIPT>";
    }

?>