<?php
  session_start();
  putenv("GOOGLE_APPLICATION_CREDENTIALS=key.json"); 
  require "gcpstorage/vendor/autoload.php";
  require "sourcecode/vendor/autoload.php";
  use Google\Cloud\Vision\VisionClient;
  use Google\Cloud\Storage\StorageClient;

  $projectId = "covidcare4u-d9aeb";
  $storage = new StorageClient([
      'projectId' => $projectId
  ]);
  $bName = "covidcare4ubucket";
  function uploadObject($bucketName, $objectName, $source)
  {
      $storage = new StorageClient();
      $file = fopen($source, 'r');
      $bucket = $storage->bucket($bucketName);
      $object = $bucket->upload($file, [
          'name' => $objectName
      ]);
      //printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
  }

  
  include 'connection.php';

  $lkey = $_COOKIE['lkey'];
  $tdate = ($_POST['tdate']);
  $rdate = ($_POST['rdate']);
  $from = ($_POST['from']);
  $to = ($_POST['to']);
  $vehno = ($_POST['vehno']);
  $count = ($_POST['count']);
  $email = ($_POST['email']);
  $namelist = ($_POST['namelist']);
  $purpose = ($_POST['purpose']);
  $pkey = $_POST['pkey'];
  $filename = $_FILES['aadharfile']["name"];
  $cardno=$_POST['cardno'];

  $filePath = realpath($_FILES["aadharfile"]["tmp_name"]);
  //echo $filePath;exit;
  
  /*Google Cloud Vision Starts*/

  $vision = new VisionClient(['keyFile'=> json_decode(file_get_contents("sourcecode/key.json"),true)]);
  $path = $_FILES['aadharfile']["tmp_name"];

  $familyPhotoResource = fopen($path, "r");
  //var_dump($familyPhotoResource);exit;

  $image = $vision->image($familyPhotoResource,['TEXT_DETECTION']);
  $result = $vision->annotate($image);

   /*Google Cloud Vision Ends*/

  $result = serialize($result);

  $details = str_replace(' ', '', $result);
  $details = substr($details,0,5000);


  if((strpos($details,$cardno) !== false))
  {
    //echo "Card Number Found!";exit;
    $status = 0;
    $k1=md5(microtime());
    $passkey=substr($k1,0,8);

    $curdate = date('yy-m-d');

    $sql3="insert into tb_vehiclepass(traveldate,returndate,fromplace,toplace,carregno,personcount,passkey,email,namelist,purpose,status,curdate,pkey,idnumber,filename,loginid) values 
    ('".$tdate."','".$rdate."','".$from."','".$to."','".$vehno."','".$count."','".$passkey."','".$email."','".$namelist."','".$purpose."','".$status."','".$curdate."','".$pkey."','".$cardno."','".$filename."','".$lkey."')";
      
    $ex2=mysqli_query($conn,$sql3);

    if($ex2)
    {

     /* $path="Uploads/".$passkey;
      mkdir($path,0777);
      move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);*/
      uploadObject($bName,$passkey."/".$_FILES['aadharfile']['name'],$_FILES['aadharfile']['tmp_name']);
      echo "<SCRIPT type='text/javascript'>alert('Inter-District Pass Applied Successfully');
      window.location.replace(\"travelpassstatus.php\");
      </SCRIPT>";
    }
    else
    {
      echo "<SCRIPT type='text/javascript'>alert('Pass Application Submission Failed');
      window.location.replace(\"travelpass.php\");
      </SCRIPT>";
    }  
  }
  else
  {
     //echo "Card Number Not Found";exit;
     echo "<SCRIPT type='text/javascript'>alert('Card Number Doesnot Match With The Document Uploaded');
       window.location.replace(\"travelpass.php\");
       </SCRIPT>";
  }
?>
