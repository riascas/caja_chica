<?php
	session_start();
	session_destroy();
	header("Location: pantalla_login.php");
?>