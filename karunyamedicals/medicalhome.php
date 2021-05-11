<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
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