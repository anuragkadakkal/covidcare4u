<?php
    session_start();
    include 'connection.php';

    $msg = $_POST['msg'];
    $slot = $_POST['slot'];
    $dbkey = $_POST['dbkey'];
    $apdate = $_POST['apdate'];
    $drphno = $_POST['drphno'];
    $dbemail = $_POST['dbemail'];
    $curdate=date("d-m-Y h:i:sa");

    $msg1=$apdate." - ".$slot." - ".$msg;

    $_SESSION['msg']=$msg;
    $_SESSION['slot']=$slot;
    $_SESSION['apdate']=$apdate;
    $_SESSION['emailid']=$dbemail;
    $_SESSION['phones']=$drphno;

    $sql="update tb_drbooking set dbfeedback='".$msg1."',dbstatus='1' where dbkey='".$dbkey."' ";
    //echo $sql;exit;
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