<?php
	include 'connection.php';
    $loginid = $_COOKIE['lkey'];
	$firstname = $_POST['fname'];
    $address = $_POST['address'];
    $items = $_POST['items'];
    $phno = $_POST['phno'];;
	$qstatus = $_POST['gender'];

    $filename = $_FILES['aadharfile']["name"];
	$dist = $_POST['district'];
	$pin = $_POST['pincode'];
    $status = 0;
    $curdate = date('d-m-y');
    $k1=md5(microtime());
	$filekey=substr($k1,0,8);

    $sql="insert into tb_medicine (fname,address,items,phno,qstatus,
    prescription,district,pincode,curdate,status,filekey,loginid) values 
    ('".$firstname."','".$address."','".$items."','".$phno."','".$qstatus."','".$filename."','".$dist."',
    '".$pin."','".$curdate."','".$status."','".$filekey."','".$loginid."')";

    
 
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        $path="Uploads/".$filekey;
        mkdir($path);
        move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);
        echo "<SCRIPT type='text/javascript'>alert('Medicine Order Successfully Placed');
        window.location.replace(\"customerhome.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Order Failed');
       window.location.replace(\"cordermedicine.php\");
       </SCRIPT>";
    }

?>