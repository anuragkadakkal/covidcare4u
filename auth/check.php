<?php
session_start();


require "Authenticator.php";
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header("location: index.php");
    die();
}
$Authenticator = new Authenticator();

$checkResult = $Authenticator->verifyCode($_SESSION['auth_secret'], $_POST['code'], 2);    // 2 = 2*30sec clock tolerance

if (!$checkResult) {
    $_SESSION['failed'] = true;
    header("location: index.php");
    die();
}
else
{
    $_SESSION["logined"] = 1;
    echo "<SCRIPT type='text/javascript'>alert('Authentication Successfull');
       window.location.replace(\"../admin/index.php\");
       </SCRIPT>";
}

?>
