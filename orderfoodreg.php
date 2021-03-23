<?php
	include 'connection.php';
    $loginid = $_COOKIE['lkey'];
	$firstname = $_POST['fname'];
    $address = $_POST['address'];
    $items = $_POST['items'];
    $phno = $_POST['phno'];;
	$qstatus = $_POST['gender'];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
    $status = 0;
    $k1=md5(microtime());
	$filekey=substr($k1,0,8);
    $curdate = date('d-m-y');

    $sql="insert into tb_food (filekey,fname,address,items,phno,qstatus,district,pincode,status,curdate,loginid) values ('".$filekey."','".$firstname."','".$address."','".$items."','".$phno."','".$qstatus."','".$dist."',
    '".$pin."','".$status."','".$curdate."','".$loginid."')";
 
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
      echo "<SCRIPT type='text/javascript'>alert('Food Order Successfully Placed');
       window.location.replace(\"customerhome.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Order Failed');
       window.location.replace(\"corderfood.php\");
       </SCRIPT>";
    }

?>