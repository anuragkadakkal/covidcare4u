<?php
	session_start();
	unset($_SESSION["cart_item"]);
	include 'connection.php';
	$kitkey=$_POST['kitkeys'];
    $loginid = $_COOKIE['lkey'];
	$firstname = $_POST['fname'];
    $address = $_POST['address'];
    $phno = $_POST['phno'];;
	$qstatus = $_POST['gender'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
    $kitkey= $_POST['kitkeys'];
    $foods= $_POST['fooditems'];
    

    $len=strlen($foods);
    $foods=substr($foods,0,$len-3);


    $totprice=$_POST['totprice'];
    $status = 0;
    $k1=md5(microtime());
	$filekey=substr($k1,0,8);
    $curdate = date('Y-m-d');

    $sql="insert into tb_medicine (filekey,fname,address,items,phno,qstatus,district,pincode,status,curdate,medkey,loginid) values ('".$filekey."','".$firstname."','".$address."','".$foods."','".$phno."','".$qstatus."','".$dist."','".$pin."','".$status."','".$curdate."','".$kitkey."','".$loginid."')"; // echo $sql;exit;
    $ex1=mysqli_query($conn,$sql);

    $k1=md5(microtime());
    $fbkey=substr($k1,0,8);
    $sql="insert into tb_medbill (mbkey,mbdate,mbamount,mborderkey,mbloginid) values ('".$fbkey."','".$curdate."','".$totprice."','".$filekey."','".$loginid."')";//echo $sql;exit;
    $ex2=mysqli_query($conn,$sql);


    if($ex1 && $ex2)
  	{
      echo "<SCRIPT type='text/javascript'>alert('Medicine Order Successfully Placed');
       window.location.replace(\"ordermedicinestatus.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Order Failed');
       window.location.replace(\"ordermedicine.php\");
       </SCRIPT>";
    }

?>
