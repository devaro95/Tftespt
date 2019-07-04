function mostrarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "visible";
}
function ocultarCaja(arg){
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "hidden";
}