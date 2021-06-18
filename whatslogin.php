<?php
session_start();
//http://chat-api.phphive.info/login/gui
$num = "91".$_POST['phone'];
$_SESSION['email']=$num;
$chatApiToken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MjYxNzIzNTQsInVzZXIiOiI5MTczNTYzMDgxMjgifQ.Yi9PU7zAEvZByoCCgJ9luf5yAlBFI-u8eGsGwn8Sfv0"; 
 
$number = $num; // Number
$k1=md5(microtime());
$k2=substr($k1,0,8);

$_SESSION['key']=$k2;

$message = "*CovidCare4U - Doctor Appointment Booking OTP*                                                                                                                                                                           Your OTP for Doctor Appointment Booking Registration is : *".$k2."*"; // Message
 
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://chat-api.phphive.info/message/send/text',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>json_encode(array("jid"=> $number."@s.whatsapp.net", "message" => $message)),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$chatApiToken,
    'Content-Type: application/json'
  ),
));
 
$response = curl_exec($curl);
curl_close($curl);
$response=$response[9];
if($response==0)
{
  echo "<SCRIPT type='text/javascript'>alert('OTP Sent');
       window.location.replace(\"balancewhatsa.php\");
       </SCRIPT>";
}
else
{
  echo "<SCRIPT type='text/javascript'>alert('Authentication Failed [API]');
       window.location.replace(\"sosdoctor.php\");
       </SCRIPT>";
}
?>
<?php 
    