addEventListener("load", cargar);
var i = 0;
var j = 0;
var array = ["fotos_cabecera/banner_torneo_myrtia.jpg","fotos_cabecera/tft_banner_rank.png", "fotos_cabecera/parche-917.jpeg","fotos_noticias/golpes-poderosos.jpg", "fotos_cabecera/composiciones.png"]
var titulo = ["Torneo presencial Myrtia Games","Nueva herramienta para streamers", "Notas del parche 9.17","Actualización: golpes poderosos", "Composiciones Tier List 9.17"];
var enlace = ["https://myrtiagames.es/torneo/15-torneo-tft-teamfight-tactics","streamtftrank.php", "https://tftesp.com/noticia.php?s=notas-parche917","https://tftesp.com/noticia.php?s=golpes-poderosos", "https://tftesp.com/composiciones.html"]
function cambiarCabecera() {
    console.log(i);
    i++;
    if (i == array.length) {
        i = 0;
    }
    j++
    if (j == array.length) {
        j = 0;
    }
    var cabecera = document.getElementById("cabecera");
    var tituloCabecera = document.getElementById("tituloCabecera");
    var divEnlace = document.getElementById("enlace");
    cabecera.style.background = "url(" + array[i] + ")";
    cabecera.style.backgroundSize = "cover"
    divEnlace.onclick = enlazar;
    tituloCabecera.innerHTML = titulo[i];
}
function cargar() {
    var cabecera = document.getElementById("cabecera");
    var divEnlace = document.getElementById("enlace");
    var siguiente = document.getElementById("siguiente");
    var anterior = document.getElementById("anterior");
    siguiente.onclick = botonSiguiente;
    anterior.onclick = botonAnterior;
    cabecera.style.background = "url(" + array[i] + ")";
    cabecera.style.backgroundSize = "cover"
    tituloCabecera.innerHTML = titulo[i];
    divEnlace.onclick = enlazar;
    setInterval('cambiarCabecera()', 5000);
}
function enlazar() {
    if (enlace[j] != "") {
        location.href = enlace[j];
    }
}
function cambiar(){
    var cabecera = document.getElementById("cabecera");
    var tituloCabecera = document.getElementById("tituloCabecera");
    var divEnlace = document.getElementById("enlace");
    cabecera.style.background = "url(" + array[i] + ")";
    cabecera.style.backgroundSize = "cover"
    divEnlace.onclick = enlazar;
    tituloCabecera.innerHTML = titulo[i];
}
function botonSiguiente() {
    i++;
    j++;
    if (i >= array.length) {
        i = 0;
    }
    if (j >= enlace.length) {
        j = 0;
    }
    cambiar();
}
function botonAnterior() {
    i--;
    j--;
    if (i < 0) {
        i = array.length-1;
    }
    if (j < 0) {
        j = enlace.length-1;
    }
    cambiar();
}