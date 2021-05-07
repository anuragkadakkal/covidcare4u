<?php
    session_start();
    include 'connection.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $fullname=$firstname." ".$lastname;
    $address = $_POST['address'];
    $dist = $_POST['district'];
    $phno = $_POST['phone'];
    $drid = $_POST['phcid'];
    $emailid = $_POST['emailid'];
    $purpose = $_POST['purpose'];


  $sql="select * from tb_doctor where drkey='".$drid."'";//echo $sql;exit;

  $result = mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_array($result))
  {
    $drid=$row['loginid'];
  }
  
    $k1=md5(microtime());
    $k2=substr($k1,0,8);

    $status = 0;
    $curdate=date("Y-m-d");

    $sql3="insert into tb_drbooking(dbkey,dbtime,dbname,dbemail,dbdistrict,dbaddress,dbpurpose,dbphone,dbfeedback,dbstatus,dbdrid) values ('".$k2."','".$curdate."','".$fullname."','".$emailid."','".$dist."','".$address."','".$purpose."','".$phno."','Not Yet Viewed','0','".$drid."')";//echo $sql3;exit;
    $ex2=mysqli_query($conn,$sql3);

    if($ex2)
  	{

      echo "<SCRIPT type='text/javascript'>alert('Appointment Booking Successful. Date and Time Slot will Be Shared Shortly.');
      window.location.replace(\"index.php\");
       </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"sosdoctor.php\");
       </SCRIPT>";
    }

?>