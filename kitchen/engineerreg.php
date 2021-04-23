<?php
  session_start();
	include 'connection.php';

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$gender = $_POST['gender'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
	$section = $_POST['section'];

	$status = 1;
  $utype = 2;
  $otpstatus =1;
  $curdate = date('d-m-y');

	
	$filekey=$firstname.$pin;

  $engkey=md5(microtime());
  $engineerkey=substr($engkey,0,10);

  $pass = md5($filekey);

  $sql1="insert into tb_login(username,password,status,utype,otpstatus) values ('".$email."','".$pass."','".$status."','".$utype."','".$otpstatus."')";
  $ex1=mysqli_query($conn,$sql1);

  $sql2="select id from tb_login where username='".$email."' and password='".$pass."'";
  $result = mysqli_query($conn,$sql2);

  while($row=mysqli_fetch_array($result))
  {
      $loginid=$row["id"];
  }

	$sql2="insert into tb_engineerreg(engkey,fname,lname,address,gender,phno,district,section,pincode,curdate,loginid) values
	('".$engineerkey."','".$firstname."','".$lastname."','".$address."','".$gender."','".$phno."','".$dist."','".$section."','".$pin."','".$curdate."','".$loginid."')";

  $ex2=mysqli_query($conn,$sql2);

  if($ex1 && $ex2)
	{
    $_SESSION['email'] = $email;
    $_SESSION['pass'] = $filekey;
    echo "<SCRIPT type='text/javascript'>window.location.replace(\"engineermail.php\");</SCRIPT>";
	}
	else
	{
    echo "<SCRIPT type='text/javascript'>alert('Registration Failed.');window.location.replace(\"addksebengineer.php\");</SCRIPT>";
  }

?>
