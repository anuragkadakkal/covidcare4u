<?php
    session_start();
    if(isset($_SESSION['logined']) && $_SESSION['logined']==1)
    { 
      include 'connection.php';
      include 'vaccineheader.php';
      include 'vaccinemainhome.php';
      include 'vaccinefooter.php';
    }
    else
    {
        Header("location:../index.php");
    }
?>