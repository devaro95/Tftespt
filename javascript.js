
var asesino = 0;
var espadachin = 0;
var arrayAsesinos = ["Evelyn", "Akali", "Katarina", "Kha'zi", "Pyke", "Rengar", "Zed"];
var arrayEspadachin = ["Aatrox", "Draven", "Fiora", "Gangplank", "Shen", "Yasuo"];

function mostrarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "visible";
}
function ocultarCaja(arg){
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "hidden";
}
function select(arg){
    console.log(arg);
    var img = document.getElementById(arg)
    img.style.filter = "grayscale(100%)";
    img.setAttribute("onclick","deselect('"+ arg +"');");
    var seleccionados = document.getElementById("seleccionados");
    seleccionados.innerHTML += "<img class='imagen grande' id=" + arg +"In src='Images/Campeones/" + arg + ".png'>";
    if(arrayAsesinos.indexOf(arg)!=-1){
        asesino++;
    }
    if(arrayEspadachin.indexOf(arg)!=-1){
        espadachin++;
    }
    if(asesino>0){
        var clase = document.getElementById("Asesino");
        clase.classList.remove("byn");
    }
    if(espadachin>0){
        var clase = document.getElementById("Espadachin");
        clase.classList.remove("byn");
    }
}
function deselect(arg){
    var img = document.getElementById(arg);
    var seleccionados = document.getElementById("seleccionados");
    var borrar = document.getElementById(arg +"In");
    seleccionados.removeChild(borrar);
    img.style.removeProperty("filter")
    img.setAttribute("onclick","select('" + arg +"');");
    if(arrayAsesinos.indexOf(arg)!=-1){
        asesino--;
    }
    if(arrayEspadachin.indexOf(arg)!=-1){
        espadachin--;
    }
    if(asesino==0){
        var clase = document.getElementById("Asesino");
        clase.classList.add("byn");
    }
    if(espadachin==0){
        var clase = document.getElementById("Espadachin");
        clase.classList.add("byn");
    }
}