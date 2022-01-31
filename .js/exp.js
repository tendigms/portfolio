var first = true;



let frise = document.querySelector(".container");
let exp = document.querySelector(".experiencesweb");
frise.style.display ="block"; 

function showfrise() {
frise.style.display = "block";
exp.style.display = "none";
}


function showexp() {
let exp = document.querySelector(".experiencesweb");
frise.style.display = "none";
exp.style.display = "block";
}



function flipfocus(elt) {

	if (  first ) {

				let mask = document.querySelector('#mask');
				mask.style.display="block";
			    let h2 = document.querySelector('h2');
			    let section = document.querySelector('section');
			   

				mask.style.backgroundColor = 'rgba(128,128,128,0.9)'; 
				mask.style.zIndex="10";


				elt.style.transform = "rotateX(340deg)";
				elt.style.transition =  "transform 0.6s";
				elt.style.overflow = "visible";
				elt.style.height="fit-content";
				elt.style.zIndex="100";
		 first = false;
	}


	else {
		first = true;

		elt.style.transform = "rotateX(0deg)";
		elt.style.transition =  "transform 0.6s";
		elt.style.zIndex="0";
		elt.style.height="40px";
		elt.style.overflow = "hidden";

	

		mask.style.display="none";

		
	}
}


function nodark ( ) {
	
	elt.style.transform = "rotateX(0deg)";
		elt.style.transition =  "transform 0.6s";
		elt.style.zIndex="0";
		elt.style.height="40px";
		elt.style.overflow = "hidden";	

}









