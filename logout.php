<?php
	session_start();
	setcookie("logined",0);
	unset($_SESSION["shopping_cart"]);
	header("location:index.php");
?>
