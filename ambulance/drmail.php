<?php
    session_start();
    //https://myaccount.google.com/u/0/lesssecureapps - Turn on less secure apps

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";

    $email = $_SESSION['emailid'];
    $msg = $_SESSION['msg'];
    $time = $_SESSION['time'];
    $phone=$_SESSION['phones'];


    $mail->IsHTML(true);
    $mail->AddAddress($email, "");
    $mail->SetFrom("otpforfree@gmail.com", "KL-COVIDCARE4U");
    $mail->Subject = "SOS Ambulance - Notification";


    $content = "<font color='green'><h1>SOS Ambulance - Request Approved </h1></font><br><hr>
    <h2>Ambulance Details</h2><b>Date - Time : ".$time."<br>
    <b>Feedback : ".$msg."<br>
    <b>Contact # : +91-".$phone."<br><br>
    <hr>
    <font color='red'>Don't reply to this email...!!</font>";


    $mail->MsgHTML($content);
    if(!$mail->Send())
    {
      //echo "Error while sending Email.";
      //var_dump($mail);
    }
    else
    {
      echo "<script>alert('SOS Ambulance Details Mailed Successfully.');window.location.href='viewrequests.php';</script>";
    }
?>
