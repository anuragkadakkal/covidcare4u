<?php
		session_start();
		include 'connection.php';

		$userid=trim($_SESSION['email']);
		$vid = $_POST['vid'];
		$phcid = $_POST['phcid'];

		$vcount = ($_POST['vcount']);
		$vcount=$vcount-1;
		$userkey=$_POST['userkey']; //echo $userkey;exit;

		$k1=md5(microtime());
		$k2=substr($k1,0,8);

		$sql="update tb_vaccine set vtotal='".$vcount."' where vid='".$vid."'";
		$result = mysqli_query($conn,$sql);

		$sql="update tb_vaccinereg set vaccinestatus='1' where vkey='".$userkey."'";
		$result = mysqli_query($conn,$sql);

		if($result)
		{
			$sql3="insert into tb_vaccinebookhistory(vkey,uid,phcid,bkdate,vid) values ('".$k2."','".$userkey."','".$phcid."','".date('Y-m-d')."','".$vid."')";//echo $sql3;exit;
			$ex2=mysqli_query($conn,$sql3);
			echo "<SCRIPT type='text/javascript'>alert('Booking Successfull');
			window.location.replace(\"viewidcard.php\");</SCRIPT>";

		}
		else
		{
			echo "<SCRIPT type='text/javascript'>alert('More Than 3 Registration Not Possible');
			window.location.replace(\"viewidcard.php\"); </SCRIPT>";
		}

?>