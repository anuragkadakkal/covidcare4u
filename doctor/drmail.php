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
    $mail->Host       = "smtp.hostinger.com";

    $email = $_SESSION['emailid'];
    $msg = $_SESSION['msg'];
    $slot = $_SESSION['slot'];
    $apdate = $_SESSION['apdate'];
    $phone=$_SESSION['phones'];


    $mail->IsHTML(true);
    $mail->AddAddress($email, "");
    $mail->SetFrom("otp@covidcare4u.online", "KL-COVIDCARE4U");
    $mail->Subject = "Doctor Appointment - Booking Confirmed";


    $content = "
    <font color='green'>
        <h1>Doctor Appointment - Booking Confirmed </h1>
    </font>
    <br><hr>
    <h2>Appointment Details</h2>
    <br>
    <b>Date : ".$apdate."<br>Time Slot : ".$slot."<br>
    Feedback : ".$msg."<br>
    Contact # : +91-".$phone."<br><br>
    <hr></b>
    <font color='red'>Don't reply to this email...!!</font>";


    $mail->MsgHTML($content);
    if(!$mail->Send())
    {
      //echo "Error while sending Email.";
      //var_dump($mail);
    }
    else
    {
      echo "<script>alert('Appointment Confirm Details Mailed Successfully.');window.location.href='viewrequests.php';</script>";
    }
?>
