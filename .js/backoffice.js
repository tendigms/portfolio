// function empty () {
//  let input = document.getElementsByName('nomcolonne');
//  let form = document.getElementsByName('newcolonne');

// 	 	if ( input.value==="" ) {
			 
// 			 form.innerHTML = "Veuillez donner un nom à la colonne";

// 			}
// 		else {

// 			window.location ="update.php";
		
// 		}
//  }


	function checknomcolonne() {

		 let input = document.getElementById('nomcolonne');

	// Verifier que l'input n'est pas vide 
	//console.log(input.value);
		if ( input.value !== "" ) {
			console.log(input.value);
			return true;

		} else {
			console.log(false);


		input.innerHTML = "Veuillez donner un nom à la colonne";
		return false;

			}


    }

    function checknomvalue() {

		 let input = document.getElementById('nomvalue');

	// Verifier que l'input n'est pas vide 
	//console.log(input.value);
		if ( input.value !== "" ) {
			console.log(input.value);
			return true;

		} else {
			console.log(false);


		input.innerHTML = "Veuillez remplir le champ valeur ";
		return false;

			}


    }

