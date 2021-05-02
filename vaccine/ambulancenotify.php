<?php
    include 'connection.php';
    $drid = $_POST['drid'];
    $phcid = $_COOKIE['lkey'];

    $k1=md5(microtime());
    $k2=substr($k1,0,8);

    $msg = $_POST['msg'];
    $curdate = date("l jS \of F Y");
    $normaldate =date('Y-m-d');//echo $normaldate;exit;
    $curtime=date("h:i:sa");  

    $sql="insert into tb_drnotify(drnotkey,curtime,drnotdate,drnormaldate,drnotmsg,drid,phcid) values ('".$k2."','".$curtime."','".$curdate."','".$normaldate."','".$msg."','".$drid."','".$phcid."')";
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>alert('Notification Uploaded Successfully');
        window.location.replace(\"viewnotifications.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Uploading Failed');
       window.location.replace(\"viewdoctors.php\");
       </SCRIPT>";
    }

?>