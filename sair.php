<?php 
session_start();
unset($_SESSION['email']);
unset($_SERVER['senha']);
header("Location: form-login.php");
?>