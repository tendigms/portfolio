<?php 
session_start();
unset($_SESSION['login']);
session_destroy();

header('location:login.php?mess=1');
die();

?>