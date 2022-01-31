<?php

$login = 'tendi'; 
$mdp = 'bb';


$enterlogin = $_POST['login'];
$entermdp = $_POST['mdp'];


	if ($enterlogin == $login && $entermdp == $mdp) {
		session_start();
		$_SESSION['login'] = $login;
		header('location:backoffice.php');
		die();
	}
	else {
		header('location:login.php?error=1');
		die();
	}

?>