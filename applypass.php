<!-- https://cloud.ocrsdk.com/Account/Welcome -->
<?php
	session_start();
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

  $applicationId = '8c14a19d-4daf-478b-8a0b-43b93ca59f6f';
  $password = 'sO/cuOBcAy+U0gVrKIyh4lqU';
  // URL of the processing service. Change to http://cloud-westus.ocrsdk.com
  // if you created your application in US location
  $serviceUrl = 'http://cloud-eu.ocrsdk.com';
  if(!file_exists($filePath))
  {
    die('File '.$filePath.' not found.');
  }
  if(!is_readable($filePath) )
  {
     die('Access to file '.$filePath.' denied.');
  }

  $url = $serviceUrl.'/processImage?language=english&exportFormat=txt';
  
  // Send HTTP POST request and ret xml response
  $curlHandle = curl_init();
  curl_setopt($curlHandle, CURLOPT_URL, $url);
  curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curlHandle, CURLOPT_USERPWD, "$applicationId:$password");
  curl_setopt($curlHandle, CURLOPT_POST, 1);
  curl_setopt($curlHandle, CURLOPT_USERAGENT, "PHP Cloud OCR SDK Sample");
  curl_setopt($curlHandle, CURLOPT_FAILONERROR, true);
  $post_array = array();
  if((version_compare(PHP_VERSION, '5.5') >= 0)) {
    $post_array["my_file"] = new CURLFile($filePath);
  } else {
    $post_array["my_file"] = "@".$filePath;
  }
  curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $post_array); 
  $response = curl_exec($curlHandle);
  if($response == FALSE) {
    $errorText = curl_error($curlHandle);
    curl_close($curlHandle);
    die($errorText);
  }
  $httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
  curl_close($curlHandle);

  // Parse xml response
  $xml = simplexml_load_string($response);
  if($httpCode != 200) {
    if(property_exists($xml, "message")) {
       die($xml->message);
    }
    die("unexpected response ".$response);
  }

  $arr = $xml->task[0]->attributes();
  $taskStatus = $arr["status"];
  if($taskStatus != "Queued") {
    die("Unexpected task status ".$taskStatus);
  }
  $taskid = $arr["id"];  
  $url = $serviceUrl.'/getTaskStatus';

  if(empty($taskid) || (strpos($taskid, "00000000-0") !== false)) {
    die("Invalid task id used when preparing getTaskStatus request");
  }
  $qry_str = "?taskid=$taskid";

  while(true)
  {
    sleep(5);
    $curlHandle = curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url.$qry_str);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_USERPWD, "$applicationId:$password");
    curl_setopt($curlHandle, CURLOPT_USERAGENT, "PHP Cloud OCR SDK Sample");
    curl_setopt($curlHandle, CURLOPT_FAILONERROR, true);
    $response = curl_exec($curlHandle);
    $httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
    curl_close($curlHandle);
  
    // parse xml
    $xml = simplexml_load_string($response);
    if($httpCode != 200) {
      if(property_exists($xml, "message")) {
        die($xml->message);
      }
      die("Unexpected response ".$response);
    }
    $arr = $xml->task[0]->attributes();
    $taskStatus = $arr["status"];
    if($taskStatus == "Queued" || $taskStatus == "InProgress") {
      // continue waiting
      continue;
    }
    if($taskStatus == "Completed") {
      // exit this loop and proceed to handling the result
      break;
    }
    if($taskStatus == "ProcessingFailed") {
      die("Task processing failed: ".$arr["error"]);
    }
    die("Unexpected task status ".$taskStatus);
  }

  // Result is ready. Download it

  $url = $arr["resultUrl"];  
  $curlHandle = curl_init();
  curl_setopt($curlHandle, CURLOPT_URL, $url);
  curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($curlHandle);
  curl_close($curlHandle);

  // Let user donwload result
  $details=str_replace(' ', '', $response);
  //header('Content-type: application/rtf');
  //header('Content-Disposition: attachment; filename="file.txt"');
  //echo $details;

  // Test if string contains the word 
  $details=str_replace(' ', '', $response);
  if(strpos($details, $cardno) !== false)
  {
    //echo "Card Number Found!";
  	$status = 0;
	$k1=md5(microtime());
	$passkey=substr($k1,0,8);

	$curdate = date('yy-m-d');

	$sql3="insert into tb_vehiclepass(traveldate,returndate,fromplace,toplace,carregno,personcount,passkey,email,namelist,purpose,status,curdate,pkey,filename,loginid) values 
	('".$tdate."','".$rdate."','".$from."','".$to."','".$vehno."','".$count."','".$passkey."','".$email."','".$namelist."','".$purpose."','".$status."','".$curdate."','".$pkey."','".$filename."','".$lkey."')";
    
	$ex2=mysqli_query($conn,$sql3);

    if($ex2)
  	{
  	  $path="Uploads/".$passkey;
        mkdir($path);
        move_uploaded_file($_FILES['aadharfile']["tmp_name"],$path."/".$_FILES['aadharfile']["name"]);
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
  	//echo "Card Number Not Found";
     echo "<SCRIPT type='text/javascript'>alert('Card Number Doesnot Match With The Document Uploaded');
       window.location.replace(\"travelpass.php\");
       </SCRIPT>";
  }
?>
