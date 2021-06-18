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

    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];

    $mail->IsHTML(true);
    $mail->AddAddress($email, "");
    $mail->SetFrom("otp@covidcare4u.online", "KL-COVIDCARE4U");
    $mail->Subject = "PHC Doctor - Login Credentials";

   

    $content = "<b>Login Details</b><br>Username : ".$email."<br>Password : ".$pass."<br>";



    $mail->MsgHTML($content);
    if(!$mail->Send())
    {
      //echo "Error while sending Email.";
      //var_dump($mail);
    }
    else
    {
      echo "<script>alert('Login Details Mailed Successfully.');window.location.href='viewdoctors.php';</script>";
    }
?>
