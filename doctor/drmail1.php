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
    $msg = $_SESSION['msg'];//echo $msg;exit;;
    $phone=$_SESSION['phones'];
    $drname=$_SESSION['drname'];


    $mail->IsHTML(true);
    $mail->AddAddress($email, "");
    $mail->SetFrom("otp@covidcare4u.online", "KL-COVIDCARE4U");
    $mail->Subject = "Doctor Appointment - Booking Rejected";


    $content = "
    <font color='red'>
        <h1>Doctor Appointment - Booking Rejected </h1>
    </font>
    <br><hr>
    <h2>Doctor Details</h2>
    <br>
    <b>Doctor Name : ".$drname."<br>
    Feedback : ".$msg."<br>
    Contact # : +91-".$phone."<br><br>
    <hr></b>
    <font color='red'>Don't reply to this email...!!</font>";


    $mail->MsgHTML($content);
    if(!$mail->Send())
    {
      //echo "Error while sending Email.";
     // var_dump($mail);
    }
    else
    {
      echo "<script>alert('Appointment Rejection Mailed Successfully.');window.location.href='viewrequests.php';</script>";
    }
?>
