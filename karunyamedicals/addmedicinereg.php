<?php
    session_start();
    include 'connection.php';

    $loginid = $_COOKIE['lkey'];
    $fname = $_POST['fname'];
    $company = $_POST['company'];
    $tdate = $_POST['tdate'];
    $rdate = $_POST['rdate'];
    $qty = $_POST['qty'];
    $desc = $_POST['desc'];
    $fprice = $_POST['price'];

    //$description="<b>Manufactured By : ".$company."</b><br>Mfg Date : ".$tdate."<br>Exp Date : ".$rdate."<br>Description : ".$desc;
    //echo $description;exit;

    $status = 1;
    $delstatus = 0;
    $curdate = date("l jS \of F Y h:i:s A");
    $times=date("l jS \of F Y");

    $fkey = md5(microtime());
    $key = substr($fkey,0,8);
  
    $sql3 = "insert into tb_medicinereg (fkey,mfgcompany,fname,mfgdate,expdate,fdate,ftime,fdesc,fprice,fqty,fstatus,delstatus,loginid) values ('".$key."','".$company."','".$fname."','".$tdate."','".$rdate."','".$curdate ."','".$times."','".$desc."','".$fprice."','".$qty."','".$status  ."','".$delstatus."','".$loginid."')";//echo $sql3;exit;
    $ex2 = mysqli_query($conn,$sql3);
 
    if($ex2)
    {
        echo "<SCRIPT type='text/javascript'>alert('Medicine Added');window.location.replace(\"viewmedicines.php\");</SCRIPT>"; 
    }
    else
    {
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"addmedicine.php\");
       </SCRIPT>";
    }

?>