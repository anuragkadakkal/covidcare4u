<?php
    session_start();
    if(isset($_COOKIE['logined']) && $_COOKIE['logined']==1)
    {




        include 'adminfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>
