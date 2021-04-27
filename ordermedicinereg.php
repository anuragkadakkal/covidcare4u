<?php
    include 'connection.php';
    $filename = $_FILES['aadharfile']["name"];
    $key = $_POST['filekey'];
    $sql="update tb_medicine set prescription='".$filename."',status='0' where filekey='".$key."'";//echo $sql;exit;
    $ex2=mysqli_query($conn,$sql);

    if($ex2)
  	{
        $path="Uploads/".$key;
        mkdir($path);
        move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);
        echo "<SCRIPT type='text/javascript'>alert('Doctor Prescription Uploaded Successfully');
        window.location.replace(\"ordermedicinestatus.php\");
        </SCRIPT>";
  	}
  	else
  	{
      echo "<SCRIPT type='text/javascript'>alert('Uploading Failed');
       window.location.replace(\"ordermedicinestatus.php\");
       </SCRIPT>";
    }

?>