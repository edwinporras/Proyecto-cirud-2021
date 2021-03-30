let ubicacionPrincipal = window.pageYOffset;
window.onscroll = function () {
    let desplazamiento = window.pageYOffset;
    if (ubicacionPrincipal=desplazamiento) {
        document.getElementById('mostrarimg').style.display="inline-flex";
        document.getElementById('ocultarimg').style.display="none";
    }else{
        document.getElementById('mostrarimg').style.display="none";
        document.getElementById('ocultarimg').style.display="inline-flex";
    }
    ubicacionPrincipal = desplazamiento;
}