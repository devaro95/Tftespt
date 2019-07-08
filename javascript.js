function mostrarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "visible";
}
function ocultarCaja(arg){
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "hidden";
}
function select(arg){
    var seleccionados = document.getElementById("seleccionados");
    seleccionados.innerHTML = "<img src='Images/Campeones/" + arg + ".png' style='width: 50px'>";
}