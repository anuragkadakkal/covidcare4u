<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'ambulanceheader.php';
      include 'ambulancemainhome.php';
      include 'ambulancefooter.php';
    }
    else
    {
        Header("location:../index.php");
    }
?>
