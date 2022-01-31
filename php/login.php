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
</head>
<body> 

<!-- Header -->

<?php
  include("header.php");
?>



		<div id="mesinfos">

			<div id="Headerdiv"> 
				<span class="first"> Se connecter </span>

					<div id="monformulaire">
							<form method="POST" action="checkloginmdp.php">
								<span> Identifiant : </span>  
								<input type="text" name='login'/> <br/>
								<span> Mot de passe :</span> 
								<input type="password" name='mdp'/>
								<input type='submit' name='validelogin' value='Soumettre'/> <br/>
								<?php 		
								if ( isset($_GET['error']) ) {
								echo "Mauvais login/mot de passe";
								} 

								if ( isset($_GET['mess']) ) {
								echo "Vous avez bien été déconnecté du Back Office";
								
								} 
								?>

							</form>
					</div>
			</div>
   	</div>
	
<footer> 
	<a href="#"> Mentions Légales </a>
	<a href="#"> Plan du site  </a>
</footer>


</body>
</html>