<?php
    session_start();
	include 'connection.php';

	$email = $_POST['email'];
  $fname = $_POST['fname'];

	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];

    $status = 1;
    $utype = 5;

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

    $sql3="insert into tb_phc (phckey,fname,address,email,district,pincode,phone,loginid) values ('".$policekey."','".$fname."','".$address."','".$email."','".$dist."','".$pin."','".$phno."','".$loginid."')";// echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    if($ex1 && $ex2)
  	{
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        echo "<SCRIPT type='text/javascript'>window.location.replace(\"phcmail.php\");</SCRIPT>";
      
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"addphc.php\");
       </SCRIPT>";
    }

?>