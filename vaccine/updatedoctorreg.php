<?php
	session_start();
	include 'connection.php';

	$key = $_POST['drkey'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$gender = $_POST['gender'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
	$exp = $_POST['exp'];
	$qual = $_POST['qual'];
  	$specs = $_POST['specs'];

  	$sql1 = "select * from tb_doctor where drkey='".$key."'";
    $result = mysqli_query($conn,$sql1);
    while ($row=mysqli_fetch_array($result))
    {
    	$id=$row['loginid'];
    }

    $sql2="update tb_login set username='".$email."' where id ='".$id."'";
    $ex1 = mysqli_query($conn,$sql2);

    $sql3 = "update tb_doctor set fname='".$firstname."',lname='".$lastname."',address='".$address."',district='".$dist."',pincode='".$pin."'
	,phno='".$phno."',gender='".$gender."',qual='".$qual."',specs='".$specs."',exp='".$exp."' where drkey='".$key."'";
	$ex2=mysqli_query($conn,$sql3);

	if($ex2)
	{
		echo "<SCRIPT type='text/javascript'>alert('PHC Doctor Details Updated Successfully');window.location.replace(\"viewdoctors.php\"); </SCRIPT>";
	}
	else
	{
		echo "<SCRIPT type='text/javascript'>alert('Updation Failed.');window.location.replace(\"updatephcdr.php\");</SCRIPT>";
	}
 ?>