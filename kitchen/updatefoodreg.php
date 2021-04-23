<?php
    session_start();
    include 'connection.php';
    $fkey=$_GET['t'];
    $loginid = $_COOKIE['lkey'];
    $fname = $_POST['fname'];
    $qty = $_POST['qty'];
    $desc = $_POST['desc'];
    $fprice = $_POST['price'];

    $status = 1;
    $delstatus = 0;
    $curdate = date("l jS \of F Y h:i:s A");
    $times=date("l jS \of F Y");

  
    $sql3 = "update tb_foodreg set fname='".$fname."',fdate='".$curdate."',ftime='".$times."',fdesc='".$desc."',fprice='".$fprice."',fqty='".$qty."',
    fstatus='".$status."',loginid='".$loginid."' where fkey='".$fkey."'";
    $ex2 = mysqli_query($conn,$sql3);
 
    if($ex2)
    {
        echo "<SCRIPT type='text/javascript'>alert('Food Details Updated');window.location.replace(\"viewfoods.php\");</SCRIPT>"; 
    }
    else
    {
      echo "<SCRIPT type='text/javascript'>alert('Updation Failed');
       window.location.replace(\"addfood.php\");
       </SCRIPT>";
    }

?>