<?php
    include 'connection.php';

    $vkey = $_POST['vkey'];
    $uid = $_POST['uid'];
    $srname = $_POST['srname'];

    $sql="select * from tb_phc where loginid='".$_COOKIE['lkey']."'";//echo $sql;exit;
    $result = mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result))
    {
      $phcname=$row['fname'];
      $phcadr=$row['address'];
    }

      //dose2
    $sql="update tb_vaccinereg set vaccinestatus='4', vacdate2='".date('Y-m-d')."',vacstaff2='".$srname."',vacphcname='".$phcname."',vacphcaddre='".$phcadr."' where vkey='".$uid."'"; //echo $sql;exit;
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>alert('Vaccine Details Uploaded Successfully');
        window.location.replace(\"viewspotvaccinereg.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Data Uploading Failed');
       window.location.replace(\"viewspotvaccinereg.php\");
       </SCRIPT>";
    }

?>