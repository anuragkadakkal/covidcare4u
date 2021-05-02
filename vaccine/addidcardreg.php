<?php
      session_start();
    	include 'connection.php';
    	$firstname = $_POST['fname']." ".$_POST['lname'];

    	$phno = trim($_POST['phno']);
    	$gender = $_POST['gender'];

    	$idcard = $_POST['idcard'];
    	$age = $_POST['age'];

      $k1=md5(microtime());
      $k2=substr($k1,0,8);
  
    	$vacstatus = 0;

      $sql="select * from tb_vaccinereg where phone='".trim($_SESSION['email'])."'";//echo $sql;exit;
      $result = mysqli_query($conn,$sql);
      $count=0;
      while ($row=mysqli_fetch_array($result))
      {
        $count++;
      } 
      if($count==0 || $count==1 || $count==2)
      {
         $sql3="insert into tb_vaccinereg(vkey,fname,phone,gender,idcard,yob,vaccinestatus) values ('".$k2."','".$firstname."','".$phno."','".$gender."','".$idcard."','".$age."','".$vacstatus."')";//echo $sql3;exit;
      $ex2=mysqli_query($conn,$sql3);
      echo "<SCRIPT type='text/javascript'>alert('Registration Successfull');
         window.location.replace(\"viewidcard.php\");</SCRIPT>";
        
      }
    	else
    	{
        echo "<SCRIPT type='text/javascript'>alert('More Than 3 Registration Not Possible');
         window.location.replace(\"viewidcard.php\"); </SCRIPT>";
      }

?>