<?php
    session_start();
    include 'connection.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $address = $_POST['address'];

    $phno = $_POST['phone'];

    $pcid = $_POST['pcid'];
    $phcid = $_POST['phcid'];

    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];

    $emailid = $_POST['emailid'];

    $dist = $_POST['district'];
    $idno = $_POST['idno'];

    $filename = $_FILES['aadharfile']['name'];

    $k1=md5(microtime());
    $k2=substr($k1,0,8);

    $status = 0;

    $sql3="insert into tb_quarreg(qkey,fname,lname,address,email,district,phno,pcid,phcid,sdate,edate,idno,idcard,status) values ('".$k2."','".$firstname."','".$lastname."','".$address."','".$emailid."','".$dist."','".$phno."','".$pcid."','".$phcid."','".$sdate."','".$edate."','".$idno."','".$filename."','".$status."')";//echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    $_SESSION['emails']=$emailid;
    $_SESSION['key']=$k2;

    if($ex2)
  	{
      $path="Uploads/".$k2;
      mkdir($path);
      move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);

      echo "<SCRIPT type='text/javascript'>window.location.replace(\"quarmail.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"vaccinereg.php\");
       </SCRIPT>";
    }

?>