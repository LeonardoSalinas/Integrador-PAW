
var slideIndex = 1,
	done = false,
	divNum = 0,
	divs = new Array();

	while (!done){
		var aux;
		if ((aux = document.getElementsByClassName("miniSlide" + divNum )).length > 0) {
			divs.push(aux);
			divNum++;
		} else {
			done = true;
		}
		
	}

iniciar();

function avanzar() {
  mover(1);
}

function mover(n) {
    this.mostrarSlide(this.slideIndex += n);
}

function cambiarA(n) {
    this.mostrarSlide(this.slideIndex = n);
}

function mostrarSlide(n) {
	for (var i = 0; i < divs.length; i++){
	    // var slides = document.getElementsByClassName("miniSlide");
	    if (n > divs[i].length) {this.slideIndex = 1}
	    if (n < 1) {this.slideIndex = divs[i].length}
	    //oculto todas las mini slides
	    for (var j = 0; j < divs[i].length; j++) {
	        divs[i][j].style.display = "none";
	    }
	    // visualizo las slides
	    divs[i][this.slideIndex-1].style.display = "block";
	}
}

function iniciar() {
    this.slideIndex=1;
    this.mostrarSlide(this.slideIndex);
    //Seteo el timer que mueve el carrusel
    setInterval(function () {
            avanzar();
    },4000);
 }

