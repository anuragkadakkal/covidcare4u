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
    $mail->Host       = "smtp.hostinger.in";

    $email = $_SESSION['emails'];
    $key = $_SESSION['key'];

    $mail->IsHTML(true);
    $mail->AddAddress($email, "");
    $mail->SetFrom("otp@covidcare4u.online", "KL-COVIDCARE4U");
    $mail->Subject = "Quarentine Status Registered";

   

    $content = "<b><h3><font color='green'>Quarantine Status Registered in CovidCare4U Portal - SUCCESS</font></h3></b><hr><br>For Status Tracking - Use This ID : ".$key."<br><br><br><br><br><hr><br><font color='red'>Info : Don't reply to this mail.</font>";



    $mail->MsgHTML($content);
    if(!$mail->Send())
    {
      //echo "Error while sending Email.";
      //var_dump($mail);
    }
    else
    {
      echo "<script>alert('Quarantine Details Tracking Key Mailed Successfully.');window.location.href='index.php';</script>";
    }
?>
