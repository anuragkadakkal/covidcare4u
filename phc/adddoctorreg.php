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
	$exp = $_POST['exp'];
	$qual = $_POST['qual'];
  $specs = $_POST['specs'];
  $k1=md5(microtime());
  $k2=substr($k1,0,8);
	$utype = 6;
	$status = 1;
  $pass=$firstname.$lastname.$pin;
  $encpass=md5($pass);//exit;

	  $sql1="insert into tb_login(username,password,utype,status) values ('".$email."','".$encpass."','".$utype."','".$status."')";
    $ex1=mysqli_query($conn,$sql1);

    $sql2="select id from tb_login where username='".$email."' and password='".$encpass."'";
    $result = mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($result))
    {
        $loginid=$row["id"];
    }

    $sql3="insert into tb_doctor(drkey,fname,lname,address,phno,gender,district,qual,exp,specs,pincode,loginid,phcid) values ('".$k2."','".$firstname."','".$lastname."','".$address."','".$phno."','".$gender."','".$dist."','".$qual."','".$exp."','".$specs."','".$pin."','".$loginid."','".$_COOKIE['lkey']."')";
    //echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    if($ex1 && $ex2)
  	{
      $_SESSION['email'] = $email;
      $_SESSION['pass'] = $pass;
      echo "<SCRIPT type='text/javascript'>window.location.replace(\"drmail.php\");</SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"adddoctor.php\");
       </SCRIPT>";
    }

?>