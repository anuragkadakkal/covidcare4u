<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {

    include 'connection.php';
    include 'medicalheader.php';
    include 'medicalnmainhome.php';
    include 'medicalfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
