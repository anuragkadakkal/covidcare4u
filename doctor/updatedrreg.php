<?php
	session_start();
	include 'connection.php';

	$address = $_POST['address'];
	$fname = $_POST['fname'];
	$phno = $_POST['phno'];
	$email = $_POST['email'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
	$key = $_POST['key'];


	$sql1 = "select * from tb_doctor where drkey='".$key."'";
    $result = mysqli_query($conn,$sql1);
    while ($row=mysqli_fetch_array($result))
    {
    	$id=$row['loginid'];
    }

    $sql2="update tb_login set username='".$email."' where id ='".$id."'";
    $ex1 = mysqli_query($conn,$sql2);


	$sql3 = "update tb_doctor set phno='".$phno."' where drkey='".$key."'";
	$ex2=mysqli_query($conn,$sql3);

	if($ex2 && $ex1)
	{
		echo "<SCRIPT type='text/javascript'>alert('Doctor Details Updated Successfully');window.location.replace(\"drhome.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Failed.');window.location.replace(\"drupdate.php\");</SCRIPT>";
	}

?>
