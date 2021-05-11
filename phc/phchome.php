<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
        include 'connection.php';
        include 'phcheader.php';
        include 'phcmainhome.php';
        include 'phcfooter.php';
    }

    else
    {
        Header("location:../index.php");
    }
?>