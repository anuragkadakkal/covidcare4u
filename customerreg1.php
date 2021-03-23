<?php
	include 'connection.php';

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$gender = $_POST['gender'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
	$pass = md5($_POST['pass']);
	$conpass = $_POST['conpass'];
	$utype = 1;
	$status = 1;

	  $sql1="insert into tb_login(username,password,utype,status) values ('".$email."','".$pass."','".$utype."','".$status."')";
    $ex1=mysqli_query($conn,$sql1);

    $sql2="select id from tb_login where username='".$email."' and password='".$pass."'";
    $result = mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($result))
    {
        $loginid=$row["id"];
    }

    $sql3="insert into tb_customer(fname,lname,address,phno,gender,district,pincode,loginid) values ('".$firstname."','".$lastname."','".$address."','".$phno."','".$gender."','".$dist."','".$pin."','".$loginid."')";
    $ex2=mysqli_query($conn,$sql3);

    if($ex1 && $ex2)
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Successful');
       window.location.replace(\"index.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"customerreg.php\");
       </SCRIPT>";
    }

?>