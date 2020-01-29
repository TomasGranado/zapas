const backToTopButton = document.querySelector("#back-to-top"); 
// const productsShow = document.querySelector(".delay-2s")
const darkMode = document.querySelector('.toggle');

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
    if(window.pageYOffset > 300){
        if(!backToTopButton.classList.contains("btnEntrance")) {
            backToTopButton.classList.add("btnExit");
            backToTopButton.classList.add("btnEntrance");
            backToTopButton.style.display = "block";
          }
    }else{
        if(backToTopButton.classList.contains("btnEntrance")) {
            backToTopButton.classList.add("btnEntrance");
            backToTopButton.classList.add("btnExit");
            setTimeout(function() {
              backToTopButton.style.display = "none";
            }, 250);
          }
        }
    }

backToTopButton.addEventListener("click", smoothScrollBackToTop);

function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 750;
  let start = null;
  
  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }
}
function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};

darkMode.addEventListener("click", changeColor);

function changeColor() {
  const cajas= document.getElementsByClassName("cambioCaja");
  const fondo= document.getElementsByClassName("cambio");
  const nav= document.getElementsByClassName("cambioNav");
  
  if (darkMode.checked) {
    for (const cambioCajas of cajas) {
      cambioCajas.classList.remove("bg-dark");
      cambioCajas.classList.remove("text-white");
      cambioCajas.classList.remove("border-white");  
  }
    for (const cambioNav of nav) {
    cambioNav.classList.remove("fondoNav");
    cambioNav.classList.remove("text-white");
    cambioNav.classList.remove("shadowNav");
  }

    for (const cambio of fondo) {
    cambio.classList.remove("bg");
    cambio.classList.remove("text-white");
}
  } else {
    for (const cambioCajas of cajas) {
      cambioCajas.classList.add("bg-dark");
      cambioCajas.classList.add("text-white");  
      cambioCajas.classList.add("border-white");  
  }
    for (const cambioNav of nav) {
    cambioNav.classList.add("fondoNav");
    cambioNav.classList.add("text-white");
    cambioNav.classList.add("shadowNav");
  }
    for (const cambio of fondo) {
    cambio.classList.add("bg");
    cambio.classList.add("text-white");
  }

  }  
}



// window.addEventListener("scroll",activateAnimation);

// function activateAnimation() {
//     if (window.pageYOffset > 250) {
      
//     }
// }