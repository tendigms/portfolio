<?php 
include 'portfolio.inc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title> BACK-OFFICE </title>
<link rel="stylesheet" type="text/css" href="./.css/base.css">
<link rel="stylesheet" type="text/css" href="./.css/backoffice.css">
<style type="text/css">

	body {background-image: none;}
	
	img {width: 100px ;
		 height: 100px;
	}
</style>
<script src="./.js/backoffice.js"></script>
</head>


<?php
  include("header.php");
?>





<?php

	// On récupère le nom de la table concernée

	$table_selectionnee = $_POST['valider'];
	echo "\t<h1>La table sélectionnée : <strong>$table_selectionnee</strong></h1>";

	

	//Construction du tableau d'affichage
	echo "\n\t<table>";
 
	// Récupération des en-têtes
	$columns_req = $pdo->query("SHOW COLUMNS FROM $table_selectionnee");
	$lignes_columns = $columns_req->fetchAll();
	

			foreach($lignes_columns as $column) {

				// Affichage des données dans le tableau
			$values_req = $pdo->query("SELECT * FROM $table_selectionnee");
			$lignes_values = $values_req->fetchAll(PDO::FETCH_ASSOC);
	
				echo "<tr class='head'> <th>".  $column ['Field']."</th>  \n";
				//print_r($column);

				foreach ($lignes_values as $champ => $value) {
						$abrev = "{$column['Field']}";

				 echo " <td>". $value [$abrev]."</td> \n"  ;
			
				}
				
				echo "</tr> ";
			}
		
	echo "\n\t</table>";

				include ('boutonsupp.php');
				include ('boutonajout.php');


?>


<footer></footer>





