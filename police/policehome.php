<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
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
