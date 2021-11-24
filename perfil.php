
<?php
session_start();
if(!$_SESSION['email']) {
	header('Location: facebook.php');
	exit();
}
?>