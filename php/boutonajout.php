
<?php 

	//Bouton d'ajout Colonne 
	echo "<form action=\"update.php?newcol\" method=\"POST\"  onsubmit=\"return checknomcolonne()\">
		<input type=\"hidden\" name=\"table\" value=\"$table_selectionnee\" />
		<input type=\"hidden\" name=\"id\" value=\"new\" /> <br/>
		Nouvelle colonne : 
			<input type=\"text\" name=\"nomcolonne\" id=\"nomcolonne\" /> <br/><br/>";

	if ('checknomcolonne()') {

	echo " <input class=\"boutons\" type=\"submit\" name=\"insertcol\" value=\"Valider\"/>
		</form>";
	}




	//Bouton d'ajout Valeur 
$columns_req = $pdo->query("SHOW COLUMNS FROM $table_selectionnee");
$lignes_columns = $columns_req->fetchAll();



	echo "<form action=\"update.php?newval\" method=\"POST\"  onsubmit=\"return checknomvalue()()\">";
	echo " <span> Sélectionner une colonne: </span> <select name=\"colonne\">";
		foreach($lignes_columns as $column) {

	echo "	<option value=".  $column ['Field'].">". $column ['Field']."</option>";
   
		}
	echo" </select>";

	echo"<input type=\"hidden\" name=\"table\" value=\"$table_selectionnee\" />
		<input type=\"hidden\" name=\"id\" value=\"new\" /> <br/>
		Sa valeur : 
			<input type=\"text\" name=\"nomval\" id=\"nomval\" /> <br/><br/>";

	if ('checknomvalue()') {

	echo " <input class=\"boutons\" type=\"submit\" name=\"insertval\" value=\"Valider\"/>
		</form>";
	}


?>

