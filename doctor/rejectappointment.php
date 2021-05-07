<?php
    session_start();
    include 'connection.php';
    $dbkey=$_GET['t'];
    $sql="select * from tb_drbooking inner join tb_doctor on tb_doctor.loginid=tb_drbooking.dbdrid where dbkey='".$dbkey."' order by dbid desc";
        $ex2=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($ex2))
    { 
      $_SESSION['phones']=$row['phno'];
      $_SESSION['drname']=$row['fname']." ".$row['lname'];
      $_SESSION['emailid']=$row['dbemail'];
    }

    $msg = 'Not Giving Appointments Now';
    $_SESSION['msg']=$msg;

    

    $sql="update tb_drbooking set dbfeedback='".$msg."',dbstatus='2' where dbkey='".$dbkey."' ";
    //echo $sql;exit;
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>
        window.location.replace(\"drmail1.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Uploading Failed');
       window.location.replace(\"viewrequests.php\");
       </SCRIPT>";
    }

?>