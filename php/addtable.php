<?php 
include 'portfolio.inc.php';

// $nbcolonne = $_POST['nbcolonne'];
$nomtable = $_POST['nomtable'];

if ( empty($nomtable)  ) {
	header('location:backoffice.php?error');
	die();
}
else {

	$ajout =  addtable( $pdo, $nomtable );
	$action = $ajout->execute();
	echo $nomtable;

	if ( $action ) {
		header('location:update.php?newtable');
		die();
	}

	else {
		header('location:backoffice.php?fail');
		die();
	}
	

}


?>
