<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
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