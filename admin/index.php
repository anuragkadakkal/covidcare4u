<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
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
