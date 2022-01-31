<?php

include 'portfolio.inc.php';

$email = $_POST['email'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$message = $_POST['user_message'];

// $tab_mess = message($nom,$prenom,$email, $message);

$ajout = message( $pdo,$nom,$prenom,$email,$message );

var_dump($ajout);

 $action = $ajout->execute( [ $nom,$prenom,$email,$message ] );

var_dump($action);


	if ( $action ) {

		header('location:contact.php?success=1');
		die();
	}

	else {
		header('location:contact.php?fail');
		die();
	}
	


?>