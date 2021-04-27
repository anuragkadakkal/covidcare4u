<?php
    include 'connection.php';
    $key = $_GET['t'];

    $sql="select * from tb_medicine where filekey='".$key."'"; //echo $sql;exit;

    $result = mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result))
    {
      $filename=$row['prescription'];
    }


    $sql="update tb_medicine set status='6' where filekey='".$key."'";
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        if($filename!==null)
        {  
            $path="../Uploads/".$key."/".$filename;
            unlink($path);
            $path="../Uploads/".$key;
            rmdir($path);
        }

        echo "<SCRIPT type='text/javascript'>alert('Request Applied Successfully');
        window.location.replace(\"vieworders.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Request Failed');
       window.location.replace(\"vieworders.php\");
       </SCRIPT>";
    }

?>