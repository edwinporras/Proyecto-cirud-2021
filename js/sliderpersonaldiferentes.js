let sliders = document.querySelector(".slidercontenedoralt");
let sliderind =document.querySelectorAll(".contenido-slideralt");
let cont = 1;
let widths = sliderind[0].clientWidth;
let intervalos = 4000;

/* cada vez que cambia de modalidad en movil no se pierda la propiedad */
window.addEventListener("resize", function () {
    widths = sliderind[0].clientWidth;
})

setInterval(function () {
    slidess();
},intervalos);

function slidess() {
    sliders.style.transform = "translate("+(-widths*cont*2)+"px)";
    sliders.style.transition = "transform all 1s";
    cont++;

    if (cont == sliderind.length) {
        setTimeout(function () {
            sliders.style.transform = "translate(0px)";
            sliders.style.transition = "transform 0s";   
            cont=1; 
        },1500)
    }
}