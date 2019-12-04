<?php
 session_start();

$login = $_POST['login']; 
$_SESSION['user'] = $login;

header('Location: http://lab3');
?>