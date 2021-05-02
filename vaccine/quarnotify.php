<?php
    include 'connection.php';

    $qkey = $_POST['qkey'];
    $msg = $_POST['msg']; 
    $msg = mysqli_real_escape_string($conn,$msg);

    $sql="update tb_quarreg set qfeedback='".$msg."' where qkey='".$qkey."'";//echo $sql;exit;
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        echo "<SCRIPT type='text/javascript'>alert('Notification Uploaded Successfully');
        window.location.replace(\"viewquar.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Uploading Failed');
       window.location.replace(\"viewquar.php\");
       </SCRIPT>";
    }

?>