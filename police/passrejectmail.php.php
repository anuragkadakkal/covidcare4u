<?php
    session_start();
    include 'connection.php';
    //https://myaccount.google.com/u/0/lesssecureapps - Turn on less secure apps

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';
    $passkey = $_GET['t'];
    $sql="select * from tb_vehiclepass where passkey='".$passkey."'"; 

    $result = mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result))
    {
        $a=$row['traveldate'];
		$b=$row['returndate'];
		$c=$row['fromplace'];
        $d=$row['toplace'];

		$e=$row['carregno'];
		$f=$row['personcount'];
        $g=$row['namelist'];
		$h=$row['purpose'];

		$i=$row['feedback'];
        $email=$row['email'];
    }

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.hostinger.com";

    $mail->IsHTML(true);
    $mail->AddAddress($email, "");
    $mail->SetFrom("otp@covidcare4u.online", "KL-COVIDCARE4U");
    $mail->Subject = "Travel Pass Approved";
    
    $k1=md5(microtime());
    $k2=substr($k1,0,8);
    
    $content = "<b>Travel Date :</b> ".$a."<br><b>Return Date : </b>".$b."<br><b>From : </b>".$c."<br><b>To : </b>".$d."<br><b>Car Reg No :</b> ".$e."<br><b>Total Travellers : </b>".$f."<br><b>Name(s): </b>".$g."<br><b>Purpose : </b>".$h."<br><br><b></b><font color='green' size='5px'>Status : ".$i."</font></b><br><br><b>HAPPY JOURNEY<br>STAY SAFE</b>";
    

    $_SESSION['otp'] = $k2;


    $mail->MsgHTML($content); 
    if(!$mail->Send()) 
    {
      echo "Error while sending Email.";
      //var_dump($mail);
    } 
    else 
    {
      echo "<script>alert('Travel pass is sent to your registered email.');window.location.href='travelpassstatus.php';</script>";
    }
?>