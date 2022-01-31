
function fakeclic () {
	let bouton = document.getElementById("loupe");
	bouton.style.backgroundSize = "6em";

	function bigger () {
	 bouton.style.backgroundSize = "10em";
	}
	
	setTimeout(bigger, 500);
	// bouton.style.backgroundSize = "10em";
}


// Si je veux cacher mon GTKM et l'afficher sur la page index : 
// function cacher () {
	
// 	let div = document.getElementById("bdr"); 
// 	div.style.display ="none";

// 	let article = document.getElementById("GTKMarticle");
// 	 	article.style.visibility="visible";

// 	// let input = document.getElementById("input"); 
// 	// input.focus();
// }


function redirection ( ) {
	window.location.href = "GTKM.html";
}


