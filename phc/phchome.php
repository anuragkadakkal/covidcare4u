<?php
    session_start();
    setcookie('phclogined',1);
    if(isset($_COOKIE['phclogined']) && $_COOKIE['phclogined']==1)
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
