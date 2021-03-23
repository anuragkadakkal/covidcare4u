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

    $mail->IsHTML(true);
    $mail->AddAddress("anuragkadakkal@gmail.com", "Anurag Kadakkal");
    $mail->SetFrom("otpforfree@gmail.com", "KL-FREEOTP");
    $mail->Subject = "OTP - Live";
    
    $k1=md5(microtime());
    $k2=substr($k1,0,8);
    
    $content = "Your OTP for registration is <b>".$k2."</Your>";

    $_SESSION['otp'] = $k2;


    $mail->MsgHTML($content); 
    if(!$mail->Send()) 
    {
      echo "Error while sending Email.";
      //var_dump($mail);
    } 
    else 
    {
      echo "<script>alert('OTP is sent to your registered email.');window.location.href='otpverify.php';</script>";
    }
?>