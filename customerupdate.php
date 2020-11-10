<?php
	include 'connection.php';

	$lkey = $_COOKIE['lkey'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$gender = $_POST['gender'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];

	$sql="update tb_customer set fname ='".$firstname."',lname='".$lastname."',address='".$address."',phno='".$phno."',gender='".$gender."',district='".$dist."',pincode='".$pin."' where loginid='".$lkey."'";
    $ex1=mysqli_query($conn,$sql);
    if($ex1)
  	{
      echo "<SCRIPT type='text/javascript'>alert('Profile Updated successfully');
       window.location.replace(\"customerhome.php\");
   </SCRIPT>";
  	}
  	else
  	{
  		echo"<script> alert('Profile Updation Failed')</script>";
    }
?>
