<?php
    session_start();
    $otp = $_SESSION["otp"];
    $otptext = $_POST["otpget"];
    if($otp == $otptext)
    {
        echo "<script>alert('Email verification Successfull.');</script>";
    }
    else
    {
        echo "<script>alert('Email verification Failed.');</script>";
    }

?>