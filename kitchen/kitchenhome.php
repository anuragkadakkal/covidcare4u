<?php
    session_start();
    setcookie('adminlogined',1);
    if(isset($_COOKIE['adminlogined']) && $_COOKIE['adminlogined']==1)
    {

    include 'connection.php';
    include 'kitchenheader.php';
    include 'kitchenmainhome.php';
    include 'kitchenfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
