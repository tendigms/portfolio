<?php 
include 'portfolio.inc.php';
?> 


<?php 

$table_selectionnee = $_GET['table'];

		$supp = supptable ($pdo,$table_selectionnee);

	 if ($supp) {
	 	header('location:update.php?suppok');
	 	die();
	 }

?>
