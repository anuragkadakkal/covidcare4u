<?php
    include 'connection.php';

    $vkey = $_POST['vkey'];
    $uid = $_POST['uid'];
    $srname = $_POST['srname'];

    $sql="select vaccinestatus from tb_vaccinereg where vkey='".$uid."'"; //echo $sql;exit;
    $result = mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result))
    {
      $vs=$row['vaccinestatus'];
    }
    if($vs==1)
    {
      //dose1
      $sql="update tb_vaccinereg set vaccinestatus='2', vacdate='".date('Y-m-d')."',vacdtaffname='".$srname."' where vkey='".$uid."'";
      $ex2=mysqli_query($conn,$sql);

    }
    if($vs==3)
    {
      //dose2
      $sql="update tb_vaccinereg set vaccinestatus='4', vacdate2='".date('Y-m-d')."',vacstaff2='".$srname."' where vkey='".$uid."'";
      $ex2=mysqli_query($conn,$sql);
    }

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>alert('Vaccine Details Uploaded Successfully');
        window.location.replace(\"viewvaccinereg.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Data Uploading Failed');
       window.location.replace(\"viewvaccinereg.php\");
       </SCRIPT>";
    }

?>