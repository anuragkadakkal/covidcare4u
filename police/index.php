<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
        include 'connection.php';
        include 'policeheader.php';
        include 'policemainhome.php';
        include 'policefooter.php';
     }

    else
    {
        Header("location:../index.php");
    }
?>