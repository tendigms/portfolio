<?php
include 'portfolio.inc.php';
session_start();

if (!isset ($_SESSION['login']) ) {
	header('location:login.php');
	die();
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title> BACK-OFFICE </title>
<link rel="stylesheet" type="text/css" href="./.css/base.css">
<link rel="stylesheet" type="text/css" href="./.css/backoffice.css">
</head>
<body style="background-image: none;"> 

<!-- Header -->
<?php
  include("header.php");
?>

	<section>

		<span> Bonjour <?php echo $_SESSION['login'] ; ?> </span>

		<h1> Modifier mon Portfolio : </h1>

		<form method="POST" action="modifiertable.php"> 

			<?php
			 $tables_req = $pdo->query("SHOW TABLES;");
			 $lignes_tables = $tables_req->fetchAll();
			 $retour_ligne = 0;

			foreach($lignes_tables as $ligne => $tableau) {
			$retour_ligne++;

			if ($retour_ligne%6==0)
			echo "<br/>\n";
			echo "\t<input type='submit' name='valider' class='bo' value='". $tableau ['Tables_in_portfolio2021-2022_gomes']."' style='height:100px;'>"."\n"; 
			 }

			?>

		</form>

	
		<form method="POST" action="addtable.php">
					<input type="text" name="nomtable">
					<input type="submit" value="Ajouter une table">	
		</form>


		<form method="POST" action="logout.php">
					<input type='submit' name='Deco' value='Déconnexion'/>

		</form>

		<?php
  //include("footer.php");
		?>


	</section>

<footer></footer>
</body>
</html>