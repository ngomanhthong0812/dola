<?php 
session_start();
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['cart']);
unset($_SESSION['role']);
header('Location: login.php');
?>