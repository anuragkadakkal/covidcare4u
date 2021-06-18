<?php
  session_start();
	include 'connection.php';
	$vname = $_POST['vname'];
	$vcount = $_POST['vcount'];
	$vdate = $_POST['vdate'];

  $k1=md5(microtime());
  $k2=substr($k1,0,8);
	$status = 1;

    $sql3="insert into tb_vaccine(vkey,vname,vtotal,availdate,vstatus,loginid) values ('".$k2."','".$vname."','".$vcount."','".$vdate."','".$status."','".$_COOKIE['lkey']."')";
    //echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    if($ex2)
  	{
      echo "<SCRIPT type='text/javascript'>alert('Vaccine Added Successfully');
       window.location.replace(\"viewvac.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Adding Failed Failed');
       window.location.replace(\"addvac.php\");
       </SCRIPT>";
    }

?>