//Vérification du formulaire : 


    // function emailInvalide( email ) {
    // 	let i = email.indexOf( "@" );
    // 	if ( i < 1 )
    // 		return true;
    // 	if ( i != email.lastIndexOf( "@" ) )
    // 		return true;
    // 	let droite = email.split( "@" )[1];
    // 	i = droite.lastIndexOf( "." );
    // 	if ( i == -1 )
    // 		return true;
    // 	droite = droite.substring(i);
    // 	if ( droite.length < 3 )
    // 		return true;
    // 	return false;
    // }

function verifier() {

	let nomElt = document.querySelector( "#nom" );
	let nom = nomElt.value.trim();
	if ( nom.length == 0 ) {
		nomElt.value = "";
		nomElt.focus();
		alert( "Nom invalide" );
		return false;
	}

	let prenomElt = document.querySelector( "#prenom" );
	let prenom = prenomElt.value.trim();
	if ( prenom.length == 0 ) {
		prenomElt.value = "";
		prenomElt.focus();
		alert( "Prénom invalide" );
		return false;
	}

	let emailElt = document.querySelector( "#email" );
	let email = emailElt.value.trim();

	if ( email.length == 0 || emailInvalide( email ) || !email.text.includes("@") ) {
		emailElt.value = email;
		emailElt.focus();
		alert( "Email invalide" );
		return false;
	}

	return true;

}

let verif = verifier();


function checkparam() {

	let param = window.location.search;
	let urlcheck = new URLSearchParams(param); 
	if ( urlcheck.has('success')==true ) {
		
		let card = document.querySelector('.card');
				let back = document.querySelector('.card-back');
				let front = document.querySelector('.card-front');
				
			
				card.style.backgroundColor = 'rgba(128,128,128,0.9)'; 
			
				card.style.transform = "rotateY(360deg)";
				card.style.transform.style = "preserve-3d";
				card.style.transition =  "transform 1s";
				setTimeout(gif, 1000 );
	}
}


// Fin des vérifications 



// Mouvement carte 


function flipfocus() {

			if (verif) {

				let card = document.querySelector('.card');
				let back = document.querySelector('.card-back');
				let front = document.querySelector('.card-front');
				
			
				card.style.backgroundColor = 'rgba(128,128,128,0.9)'; 
			
				card.style.transform = "rotateY(360deg)";
				card.style.transform.style = "preserve-3d";
				card.style.transition =  "transform 3s";


				setTimeout(gif, 2000 );
				
			}
}
			
function gif() {
	let gif = document.querySelector('#gif');
	gif.style.visibility = "visible";

	alert ("Votre message a été envoyé avec succès!");
}


// FIN Mouvement carte 

function submit () {
	window.setTimeout('document.formulaire.submit()', 3000);
}


