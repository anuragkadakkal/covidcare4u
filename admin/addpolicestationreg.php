<?php
    session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];

    $status = 1;
    $utype = 2;

    $pass=$dist.$phno;
    $encpass=md5($pass);

    $engkey=md5(microtime());
    $policekey=substr($engkey,0,8);
  

	$sql1="insert into tb_login(username,password,utype,status) values ('".$email."','".$encpass."','".$utype."','".$status."')";
   
    $ex1=mysqli_query($conn,$sql1);

    $sql2="select id from tb_login where username='".$email."' and password='".$encpass."'";
    
    $result = mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($result))
    {
        $loginid=$row["id"];
    }

    $sql3="insert into tb_policestation (address,email,district,pincode,phone,policekey,loginid) values ('".$address."','".$email."','".$dist."','".$pin."','".$phno."','".$policekey."','".$loginid."')";
    $ex2=mysqli_query($conn,$sql3);

    if($ex1 && $ex2)
  	{
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        echo "<SCRIPT type='text/javascript'>window.location.replace(\"policemail.php\");</SCRIPT>";
      
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"addpolicestation.php\");
       </SCRIPT>";
    }

?>