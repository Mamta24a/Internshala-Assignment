<?php
session_start();

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
} else if (isset($_SESSION['userSession'])!="") {
	header("Location: emp_dashboard.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession']);
	header("Location: index.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSession2']);
	header("Location: index.php");
}
