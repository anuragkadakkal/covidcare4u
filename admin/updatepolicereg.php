<?php
	session_start();
	include 'connection.php';

	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$email = $_POST['email'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
	$key = $_POST['key'];


	$sql1 = "select * from tb_policestation where policekey='".$key."'";
    $result = mysqli_query($conn,$sql1);
    while ($row=mysqli_fetch_array($result))
    {
    	$id=$row['loginid'];
    }

    $sql2="update tb_login set username='".$email."' where id ='".$id."'";
    $ex1 = mysqli_query($conn,$sql2);


	$sql3 = "update tb_policestation set address='".$address."',email='".$email."',district='".$dist."',pincode='".$pin."'
	,phone='".$phno."' where policekey='".$key."'";
	$ex2=mysqli_query($conn,$sql3);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Successfull');window.location.replace(\"viewpolicestations.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Failed.');window.location.replace(\"viewpolicestations.php\");</SCRIPT>";
	}

?>