<?php
	include 'connection.php';

	$firstname = $_POST['fname'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
	$pass = md5($_POST['pass']);
	$conpass = $_POST['conpass'];
  $k1=md5(microtime());
  $k2=substr($k1,0,8);

  $filename = $_FILES['aadharfile']['name'];

  $fullname=$firstname." - ".$city;
	$utype = 4;
	$status = 0;

	  $sql1="insert into tb_login(username,password,utype,status) values ('".$email."','".$pass."','".$utype."','".$status."')";
    $ex1=mysqli_query($conn,$sql1);

    $sql2="select id from tb_login where username='".$email."' and password='".$pass."'";
    $result = mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($result))
    {
        $loginid=$row["id"];
    }

    $sql3="insert into tb_karunyamedicals(kmkey,kmname,kmaddress,kmphone,kmdistrict,kmpincode,kmcity,kmcertificate,loginid) values ('".$k2."','".$fullname."','".$address."','".$phno."','".$dist."','".$pin."','".$city."','".$filename."','".$loginid."')"; //echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    if($ex1 && $ex2)
  	{
      $path="Uploads/".$k2;
      mkdir($path);
      move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);
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