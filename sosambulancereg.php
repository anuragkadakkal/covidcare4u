<?php
    session_start();
    include 'connection.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $address = $_POST['address'];
    $dist = $_POST['district'];
    $phno = $_POST['phone'];
    $ambid = $_POST['ambid'];
    $phcid = $_POST['phcid'];
    $emailid = $_POST['emailid'];
    $purpose = $_POST['purpose'];


  $sql="select * from tb_ambulance where ambkey='".$ambid."'";//echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
    $ambid=$row['ambid'];
  }
  


    $k1=md5(microtime());
    $k2=substr($k1,0,8);

    $status = 0;
    $curdate=date("d-m-Y h:i:sa");

    $sql3="insert into tb_sosambreg(soskey,ambid,fname,email,lname,phcid,address,status,curdate,district,phone,purpose,feedback) values ('".$k2."','".$ambid."','".$firstname."','".$emailid."','".$lastname."','".$phcid."','".$address."','".$status."','".$curdate."','".$dist."','".$phno."','".$purpose."','Request Not Viewed')";//echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    $_SESSION['emails']=$emailid;
    $_SESSION['key']=$k2;

    if($ex2)
  	{

      echo "<SCRIPT type='text/javascript'>alert('SOS Service Requested Successfully...Contact Details will Be Shared When They Viewed Your Request');
      window.location.replace(\"index.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"vaccinereg.php\");
       </SCRIPT>";
    }

?>