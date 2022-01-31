<?php
// include "../include/_session.php";
// include "../include/_connexion.php";
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
<script src="backoffice.js"></script>
</head>
<body>


<?php
  include("header.php");
?>


<?php

// Récupérer le nom de la table 

if ( isset ( $_POST['table'] ) ) {
	 $table_selectionnee = $_POST['table'];
}

?>
		
		
			<?php

			// S'il s'agit d'un ajout de table 

			if (isset ( $_GET['newtable']  ) ) {

					echo "<span class='ajout'> Ajout effectué.<br/> </span>";

				}
			



 // S'il s'agit d'un ajout (insert) d'une colonne 
			
			if ( isset($_POST['insertcol']) ) {


						$nomcolonne = $_POST['nomcolonne'];

						$requete_col ="ALTER TABLE $table_selectionnee ADD COLUMN $nomcolonne text(100) DEFAULT('')"; 

						$newcol = $pdo->query($requete_col);

						if ($newcol) {

								echo "<span class='ajout'> Colonne ajoutée .<br/> </span>";

						}
						
						
						// $sql_number = "ALTER TABLE $table_selectionnee ADD $nomcolonne  INT NOT NULL" ; 

						
						}


	
		 // S'il s'agit d'un ajout (insert) d'une valeur

					
			
			if ( isset($_POST['insertval']) ) {

						$nomvaleur = $_POST['nomval'];
						$nomcolonne = $_POST['colonne'];

						$requete_val ="INSERT INTO `$table_selectionnee` (`$nomcolonne`) VALUES ('$nomvaleur') "; 
						// echo $nomvaleur;
						// echo $nomcolonne;
						// var_dump($requete_val);
						$newval = $pdo->query($requete_val);

						if ($newval) {

							echo "<span class='ajout'> Valeur ajoutée .<br/> </span>";

						}

							
					}

					

				

						
					
			// }
					
						




				// S'il s'agit d'une suppression
				if ( isset($_GET['suppok']) ) {

						echo "<span class='ajout'> Suppression effectuée.<br/> </span>";

					}







			?>

		
				<!-- <input type="submit" value="Valider" /> -->
			</form>
			<a href="backoffice.php">&lt;&lt; Retour au choix de la table</a>

			<footer></footer>
</body>
</html>