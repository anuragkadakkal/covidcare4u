<?php
	session_start();
	unset($_SESSION["logined"]);
	header("Location: ../index.php");
?>
