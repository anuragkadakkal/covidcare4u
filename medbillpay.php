<?php
	include 'connection.php';
	$lkey = $_COOKIE['lkey'];
	$key=$_GET['t'];

	$sql="update tb_medicine set status='4' where filekey='".$key."'";
	$result = mysqli_query($conn,$sql);

	if($result)
	{
		//$paykey=md5(microtime());
  		//$paykey=substr($paykey,0,10);
		//$sql="insert into tb_billpayreport (paykey,paydate,payamt,payconno,payphno,paybillkey,loginid) values ('".$paykey."','".date('d-m-y')."','".$billamt."','".$conno."','".$phno."','".$key."','".$lkey."')";
  		//$ex1=mysqli_query($conn,$sql);
		echo "<SCRIPT type='text/javascript'>alert('Payment updated in your karunya medicals.'); window.location.replace(\"ordermedicinestatus.php\"); </SCRIPT>";
	}
	

?>