<?php
    session_start();
    include 'connection.php';

    $loginid = $_COOKIE['lkey'];
    $fname = $_POST['fname'];
    $qty = $_POST['qty'];
    $desc = $_POST['desc'];
    $fprice = $_POST['price'];

    $status = 1;
    $delstatus = 0;
    $curdate = date("l jS \of F Y h:i:s A");
    $times=date("l jS \of F Y");

    $fkey = md5(microtime());
    $key = substr($fkey,0,8);
  
    $sql3 = "insert into tb_foodreg (fkey,fname,fdate,ftime,fdesc,fprice,fqty,fstatus,delstatus,loginid) values ('".$key."','".$fname."','".$curdate ."','".$times."','".$desc."','".$fprice."','".$qty."','".$status  ."','".$delstatus."','".$loginid."')";//echo $sql3;exit;
    $ex2 = mysqli_query($conn,$sql3);
 
    if($ex2)
    {
        echo "<SCRIPT type='text/javascript'>alert('Food Added');window.location.replace(\"viewfoods.php\");</SCRIPT>"; 
    }
    else
    {
      echo "<SCRIPT type='text/javascript'>alert('Registration Failed');
       window.location.replace(\"addfood.php\");
       </SCRIPT>";
    }

?>