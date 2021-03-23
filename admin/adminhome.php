<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {

    include 'connection.php';
    include 'adminheader.php';
    include 'adminmainhome.php';
    include 'adminfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
