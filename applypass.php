<?php
	session_start();
	include 'connection.php';
	$lkey = $_COOKIE['lkey'];
	$tdate = ($_POST['tdate']);
	$rdate = ($_POST['rdate']);
	$from = ($_POST['from']);
	$to = ($_POST['to']);
	$vehno = ($_POST['vehno']);
	$count = ($_POST['count']);
	$email = ($_POST['email']);
	$namelist = ($_POST['namelist']);
	$purpose = ($_POST['purpose']);
	$status = 0;
	$k1=md5(microtime());
	$passkey=substr($k1,0,8);

	$curdate = date('yy-m-d');

	$sql3="insert into tb_vehiclepass(traveldate,returndate,fromplace,toplace,carregno,personcount,passkey,email,namelist,purpose,status,curdate,loginid) values 
	('".$tdate."','".$rdate."','".$from."','".$to."','".$vehno."','".$count."','".$passkey."','".$email."','".$namelist."','".$purpose."','".$status."','".$curdate."','".$lkey."')";
    
	$ex2=mysqli_query($conn,$sql3);

    if($ex2)
  	{
      echo "<SCRIPT type='text/javascript'>alert('Inter-District Pass Applied Successfully');
       window.location.replace(\"customerhome.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Pass Application Submission Failed');
       window.location.replace(\"travelpass.php\");
       </SCRIPT>";
    }



?>