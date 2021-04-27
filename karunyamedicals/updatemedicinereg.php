<?php
    session_start();
    include 'connection.php';
    $fkey=$_GET['t'];
    $loginid = $_COOKIE['lkey'];
    $fname = $_POST['fname'];
    $qty = $_POST['qty'];
    $desc = $_POST['desc'];
    $fprice = $_POST['price'];
    $company = $_POST['company'];
    $tdate = $_POST['tdate'];
    $rdate = $_POST['rdate'];

    $status = 1;
    $delstatus = 0;
    $curdate = date("l jS \of F Y h:i:s A");
    $times=date("l jS \of F Y");

  
    $sql3 = "update tb_medicinereg set fname='".$fname."',fdate='".$curdate."',ftime='".$times."',fdesc='".$desc."',fprice='".$fprice."',fqty='".$qty."',
    fstatus='".$status."',loginid='".$loginid."',mfgcompany='".$company."',mfgdate='".$tdate."',expdate='".$rdate."' where fkey='".$fkey."'"; //echo $sql3;exit;
    $ex2 = mysqli_query($conn,$sql3);
 
    if($ex2)
    {
        echo "<SCRIPT type='text/javascript'>alert('Medicine Details Updated');window.location.replace(\"viewmedicines.php\");</SCRIPT>"; 
    }
    else
    {
      echo "<SCRIPT type='text/javascript'>alert('Updation Failed');
       window.location.replace(\"viewmedicines.php\");
       </SCRIPT>";
    }

?>