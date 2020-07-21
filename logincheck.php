<?php 
    
    session_start();
    $email = $_SESSION["username"];
    $password = $_SESSION["pass"];
    echo $password;exit;
    unset($_SESSION['username']);
    unset($_SESSION['pass']);
    
  
 ?>