
function open_projet(source) {

let lien = "https://"+ source.title;

// Trouver une façon de récupérer l'alt dans le 'this' pour par la suite que ça ouvre en fonction de chaque image.

let windowObjectReference= window.open(lien,"_blank","top=100,left=200,height=400,width=900,toolbar=no,resizable=no");


}

let video = document.querySelector('video');


function play(video) { 
	video.play();
}

function stop(video) { 
	video.pause();
}





function showgalerie() {
	let galerie = document.querySelector( "#galerie" );
	let creation = document.querySelector( "#projets" );
	let check = document.querySelector( "#check" );
	let h2 = document.querySelector( "h2" );
	let body = document.querySelector( "body" );


	if (check.checked == true) {

		galerie.style.display = "block";
		creation.style.display = "none";
		body.style.backgroundImage = "none";

	}
	else {
		h2.style.color = "#5a5863";

		galerie.style.display = "none";
		creation.style.display = "block";
		body.style.backgroundImage = "url('./.css/images/fondmodifie.jpg')";
		
		}

}


let timer ;

function showslider(elt) {
	console.log(timer);

		if ( timer == null ) { 

		let mask = document.querySelector('#mask');
		mask.style.backgroundColor = 'rgba(128,128,128,0.9)'; 
		mask.style.zIndex= 0;

		let section = elt.querySelector( ".sectionslider ");
		section.style.display ="block";
		section.style.zIndex=10;

		timer = setInterval(next(elt),1000);

		}
		else {

				timer =clearInterval( timer );
	

				let section = elt.querySelector(".sectionslider ");
				mask.style.backgroundColor = 'unset'; 
				mask.style.zIndex= -10;
				section.style.display ="none";
		}

}



function next(elt) {

	let section = elt.querySelector(".sectionslider ");

	section.style.display = "block";

	let imgs = elt.querySelectorAll("div.preview-image img");
	console.log(imgs);

	//for (let i = 0; i < imgs.length; i++ ) {}
	 
	 let i = 0;

		setInterval ( function () {
			 i = i;

			if (i >= imgs.length) {

				  i = 0;
				}

			let nomimg = imgs[i].getAttribute('src');

			elt.querySelector( ".show" ).src = nomimg;
			i++;

		},1000);

}

