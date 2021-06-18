<?php
	include 'connection.php';

	$firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phno = $_POST['phno'];
	$dist = $_POST['district'];
  $brand = $_POST['brand'];
  $model = $_POST['model']; //echo $model;exit;
  $phcid = $_POST['phcid'];
	$pin = $_POST['pincode'];
	$pass = md5($_POST['pass']);
	$conpass = $_POST['conpass'];
  $k1=md5(microtime());
  $k2=substr($k1,0,8);

  $filename = $_FILES['aadharfile']['name'];
  $filename1 = $_FILES['aadharfile1']['name'];

	$utype = 7;
	$status = 0;

	  $sql1="insert into tb_login(username,password,utype,status) values ('".$email."','".$pass."','".$utype."','".$status."')";
    $ex1=mysqli_query($conn,$sql1);

    $sql2="select id from tb_login where username='".$email."' and password='".$pass."'";
    $result = mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_array($result))
    {
        $loginid=$row["id"];
    }

    $sql3="insert into tb_ambulance(ambkey,fname,lname,address,phno,district,pincode,brand,model,rcbook,drlicence,phcid,loginid) values ('".$k2."','".$firstname."','".$lastname."','".$address."','".$phno."','".$dist."','".$pin."','".$brand."','".$model."','".$filename."','".$filename1."','".$phcid."','".$loginid."')"; //echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    if($ex2)
  	{
      $path="Uploads/".$k2;
      mkdir($path,0777);
      move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);
      move_uploaded_file($_FILES['aadharfile1']["tmp_name"],$path."/".$_FILES['aadharfile1']["name"]);
      echo "<SCRIPT type='text/javascript'>alert('Registration Successfull');
       window.location.replace(\"index.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"ambulancereg.php\");
       </SCRIPT>";
    }

?>