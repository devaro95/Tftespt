var arrayResultado = [];
var arrayItems = [];
var array1 = [9, 41, 11, 19, 13, 10, 12, 14];
var array2 = [41, 40, 32, 42, 39, 28, 33, 44];
var array3 = [11, 32, 38, 37, 29, 26, 21, 25];
var array4 = [19, 42, 37, 18, 17, 24, 23, 34];
var array5 = [13, 39, 29, 17, 31, 22, 36, 43];
var array6 = [10, 28, 26, 24, 22, 30, 27, 15];
var array7 = [12, 33, 21, 23, 36, 27, 35, 16];
var array8 = [14, 44, 25, 34, 43, 15, 16, 20];
function mostrarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "visible";
}
function ocultarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "hidden";
}
function anadirItem(arg) {

    arrayResultado.push(arg);
    if (arrayResultado.length > 1) {
        for (var i = 0; i < arrayResultado.length; i++) {
            for (var k = i + 1; k < arrayResultado.length; k++) {
                if (arrayResultado[i] == 1) {
                    if (arrayItems.indexOf(array1[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array1[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 2) {
                    if (arrayItems.indexOf(array2[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array2[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 3) {
                    if (arrayItems.indexOf(array3[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array3[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 4) {
                    if (arrayItems.indexOf(array4[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array4[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 5) {
                    if (arrayItems.indexOf(array5[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array5[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 6) {
                    if (arrayItems.indexOf(array6[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array6[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 7) {
                    if (arrayItems.indexOf(array7[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array7[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 8) {
                    if (arrayItems.indexOf(array8[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array8[arrayResultado[k] - 1]);
                    }
                }
            }
        }
        console.log(arrayItems);
        for (var i = 0; i < arrayItems.length; i++) {
            document.getElementById(arrayItems[i]).style.filter = "brightness(110%)";
        }
    }
    var numeroDiv = document.getElementById("numero" + arg);
    var numero = parseInt(document.getElementById("numero" + arg).innerHTML);
    numeroDiv.innerHTML = numero + 1;;
}
function eliminarItem(arg) {
    console.log(arrayItems);
    console.log(arrayResultado);
    var i = arrayResultado.indexOf(arg);
    if (i != -1) {
        arrayResultado.splice(i, 1);
    }

    arrayItems = [];
    console.log(arrayItems);
    console.log(arrayResultado);
    for (var i = 9; i < 45; i++) {
        console.log("asd")
        document.getElementById(i).style.filter = "brightness(17%)";
    }
    if (arrayResultado.length > 1) {
        for (var i = 0; i < arrayResultado.length; i++) {
            for (var k = i + 1; k < arrayResultado.length; k++) {
                if (arrayResultado[i] == 1) {
                    if (arrayItems.indexOf(array1[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array1[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 2) {
                    if (arrayItems.indexOf(array2[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array2[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 3) {
                    if (arrayItems.indexOf(array3[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array3[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 4) {
                    if (arrayItems.indexOf(array4[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array4[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 5) {
                    if (arrayItems.indexOf(array5[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array5[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 6) {
                    if (arrayItems.indexOf(array6[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array6[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 7) {
                    if (arrayItems.indexOf(array7[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array7[arrayResultado[k] - 1]);
                    }
                } else if (arrayResultado[i] == 8) {
                    if (arrayItems.indexOf(array8[arrayResultado[k] - 1]) == -1) {
                        arrayItems.push(array8[arrayResultado[k] - 1]);
                    }
                }
            }
        }
        console.log(arrayItems);
        for (var i = 0; i < arrayItems.length; i++) {
            document.getElementById(arrayItems[i]).style.filter = "brightness(110%)";
        }
    }
    var numeroDiv = document.getElementById("numero" + arg);
    var numero = parseInt(document.getElementById("numero" + arg).innerHTML);
    if (numero > 0) {
        numeroDiv.innerHTML = numero - 1;
    }

}