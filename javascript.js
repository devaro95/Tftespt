
var asesino = 0;
var espadachin = 0;
var luchador = 0;
var cazador = 0;
var elem = 0;
var cam = 0;
var caballero = 0;
var hechicero = 0;
var protector = 0;
var pistolero = 0;
var arrayAsesinos = ["Evelynn", "Akali", "Katarina", "Khazix", "Pyke", "Rengar", "Zed"];
var arrayEspadachin = ["Aatrox", "Draven", "Fiora", "Gangplank", "Shen", "Yasuo"];
var arrayLuchador = ["RekSai", "Warwick", "Volibear", "Chogath", "Blitzcrank"];
var arrayCazador = ["Ashe", "Kindred", "Varus", "Vayne"];
var arrayElem = ["Anivia", "Brand", "Kennen", "Lissandra"];
var arrayCam = ["Elise", "Gnar", "Nidalee", "Shyvana", "Swain"];
var arrayCaballero = ["Darius", "Garen", "Mordekaiser", "Poppy", "Kayle", "Sejuani"];
var arrayHechiero = ["Ahri", "AurelionSol", "Karthus", "Kassadin", "Lulu", "Morgana", "Veigar"];
var arrayProtector = ["Leona", "Braum"];
var arrayPistolero = ["Gangplank", "Graves", "Lucian", "MissFortune", "Tristana"];

function mostrarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "visible";
}
function ocultarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "hidden";
}
function select(arg) {
    console.log(arg);
    var img = document.getElementById(arg)
    //Variables para los numeros de cantidad de champs
    var numAsesino = document.getElementById("numAsesino");
    var numLuchador = document.getElementById("numLuchador");
    var numEspadachin = document.getElementById("numEspadachin");
    var numCazador = document.getElementById("numCazador");
    var numElem = document.getElementById("numElem");
    var numCam = document.getElementById("numCam");
    var numHechicero = document.getElementById("numHechicero");
    var numCaballero = document.getElementById("numCaballero");
    var numProtector = document.getElementById("numProtector");
    var numPistolero = document.getElementById("numPistolero");
    img.style.filter = "grayscale(100%)";
    img.setAttribute("onclick", "deselect('" + arg + "');");
    var seleccionados = document.getElementById("seleccionados");
    seleccionados.innerHTML += "<img class='imagen grande' id=" + arg + "In src='Images/Campeones/" + arg + ".png'>";
    //aumento de contadores
    if (arrayAsesinos.indexOf(arg) != -1) {
        asesino++;
    } if (arrayEspadachin.indexOf(arg) != -1) {
        espadachin++;
    } if (arrayLuchador.indexOf(arg) != -1) {
        luchador++;
    } if (arrayCazador.indexOf(arg) != -1) {
        cazador++;
    } if (arrayElem.indexOf(arg) != -1) {
        elem++;
    } if (arrayCam.indexOf(arg) != -1) {
        cam++;
    } if (arrayCaballero.indexOf(arg) != -1) {
        caballero++;
    } if (arrayHechiero.indexOf(arg) != -1) {
        hechicero++;
    } if (arrayProtector.indexOf(arg) != -1) {
        protector++;
    } if (arrayPistolero.indexOf(arg) != -1) {
        pistolero++;
    }
    //asesino
    if (asesino > 0) {
        var clase = document.getElementById("Asesino");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numAsesino.innerHTML = asesino;
        if (asesino == 3) {
            var div1 = document.getElementById("Asesino1");
            div1.style.backgroundColor = "#c9aa71"
        } else if (asesino == 6) {
            var div1 = document.getElementById("Asesino2");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //luchador
    if (luchador > 0) {
        var clase = document.getElementById("Luchador");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numLuchador.innerHTML = luchador;
        if (luchador == 2) {
            var div1 = document.getElementById("Luchador1");
            div1.style.backgroundColor = "#c9aa71"
        } else if (luchador == 4) {
            var div1 = document.getElementById("Luchador2");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //espadachin
    if (espadachin > 0) {
        var clase = document.getElementById("Espadachin");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numEspadachin.innerHTML = espadachin;
        if (espadachin == 3) {
            var div1 = document.getElementById("Espadachin1");
            div1.style.backgroundColor = "#c9aa71"
        } else if (espadachin == 6) {
            var div1 = document.getElementById("Espadachin2");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //cazador
    if (cazador > 0) {
        var clase = document.getElementById("Cazador");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numCazador.innerHTML = cazador;
        if (cazador == 2) {
            var div1 = document.getElementById("Cazador1");
            div1.style.backgroundColor = "#c9aa71"
        } else if (cazador == 4) {
            var div1 = document.getElementById("Cazador2");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //elementalista
    if (elem > 0) {
        var clase = document.getElementById("Elementalista");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numElem.innerHTML = elem;
        if (elem == 3) {
            var div1 = document.getElementById("Elem1");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //Cambiaformas
    if (cam > 0) {
        var clase = document.getElementById("Cambiaformas");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numCam.innerHTML = cam;
        if (cam == 3) {
            var div1 = document.getElementById("Cam1");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //Caballero
    if (caballero > 0) {
        var clase = document.getElementById("Caballero");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        var div1 = document.getElementById("Caballero1");
        var div2 = document.getElementById("Caballero2");
        var div3 = document.getElementById("Caballero3");
        numCaballero.innerHTML = caballero;
        if (caballero == 2) {
            div1.style.backgroundColor = "#c9aa71"
        } else if (caballero == 4) {
            div2.style.backgroundColor = "#c9aa71"
        } else if (caballero == 6) {
            div3.style.backgroundColor = "#c9aa71"
        }
    }
    //Hechicero
    if (hechicero > 0) {
        var clase = document.getElementById("Hechicero");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numHechicero.innerHTML = hechicero;
        if (hechicero == 3) {
            var div1 = document.getElementById("Hechicero1");
            div1.style.backgroundColor = "#c9aa71"
        } else if (hechicero == 6) {
            var div1 = document.getElementById("Hechicero2");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //Protector
    if (protector > 0) {
        var clase = document.getElementById("Protector");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numProtector.innerHTML = protector;
        if (protector == 2) {
            var div1 = document.getElementById("Protector1");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
    //Pistolero
    if (pistolero > 0) {
        var clase = document.getElementById("Pistolero");
        clase.classList.remove("byn");
        clase.classList.add("seleccionado");
        numPistolero.innerHTML = pistolero;
        if (pistolero == 2) {
            var div1 = document.getElementById("Pistolero1");
            div1.style.backgroundColor = "#c9aa71"
        } else if (pistolero == 4) {
            var div1 = document.getElementById("Pistolero2");
            div1.style.backgroundColor = "#c9aa71"
        }
    }
}


function deselect(arg) {
    var img = document.getElementById(arg);
    var seleccionados = document.getElementById("seleccionados");
    var borrar = document.getElementById(arg + "In");
    seleccionados.removeChild(borrar);
    img.style.removeProperty("filter")
    img.setAttribute("onclick", "select('" + arg + "');");
    if (arrayAsesinos.indexOf(arg) != -1) {
        asesino--;
        numAsesino.innerHTML = asesino;
    } if (arrayEspadachin.indexOf(arg) != -1) {
        espadachin--;
        numEspadachin.innerHTML = espadachin;
    } if (arrayLuchador.indexOf(arg) != -1) {
        luchador--;
        numLuchador.innerHTML = luchador;
    } if (arrayCazador.indexOf(arg) != -1) {
        cazador--;
        numCazador.innerHTML = cazador;
    } if (arrayElem.indexOf(arg) != -1) {
        elem--;
        numElem.innerHTML = elem;
    } if (arrayCam.indexOf(arg) != -1) {
        cam--;
        numCam.innerHTML = cam;
    } if (arrayCaballero.indexOf(arg) != -1) {
        caballero--;
        numCaballero.innerHTML = caballero;
    } if (arrayHechiero.indexOf(arg) != -1) {
        hechicero--;
        numHechicero.innerHTML = protector;
    } if (arrayProtector.indexOf(arg) != -1) {
        protector--;
        numProtector.innerHTML = protector;
    } if (arrayPistolero.indexOf(arg) != -1) {
        pistolero--;
        numPistolero.innerHTML = pistolero;
    }

    if (asesino == 0) {
        var clase = document.getElementById("Asesino");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (asesino > 0) {
        var div1 = document.getElementById("Asesino1");
        var div2 = document.getElementById("Asesino2");
        if (asesino < 3) {
            div1.removeAttribute("style");
        } else if (asesino < 6) {
            div2.removeAttribute("style");
        }
    }
    if (luchador == 0) {
        var clase = document.getElementById("Luchador");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (luchador > 0) {
        var div1 = document.getElementById("Luchador1");
        var div2 = document.getElementById("Luchador2");
        if (luchador < 2) {
            div1.removeAttribute("style");
        } else if (luchador < 4) {
            div2.removeAttribute("style");
        }
    }
    if (espadachin == 0) {
        var clase = document.getElementById("Espadachin");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (espadachin > 0) {
        var div1 = document.getElementById("Espadachin1");
        var div2 = document.getElementById("Espadachin2");
        if (espadachin < 3) {
            div1.removeAttribute("style");
        } else if (espadachin < 6) {
            div2.removeAttribute("style");
        }
    }
    if (cazador == 0) {
        var clase = document.getElementById("Cazador");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (cazador > 0) {
        var div1 = document.getElementById("Cazador1");
        var div2 = document.getElementById("Cazador2");
        if (cazador < 2) {
            div1.removeAttribute("style");
        } else if (cazador < 4) {
            div2.removeAttribute("style");
        }
    }
    if (elem == 0) {
        var clase = document.getElementById("Elementalista");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (elem > 0) {
        var div1 = document.getElementById("Elem1");
        if (elem < 3) {
            div1.removeAttribute("style");
        }
    }
    if (cam == 0) {
        var clase = document.getElementById("Cambiaformas");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (cam > 0) {
        var div1 = document.getElementById("Cam1");
        if (cam < 3) {
            div1.removeAttribute("style");
        }
    }
    if (caballero == 0) {
        var clase = document.getElementById("Caballero");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (caballero > 0) {
        var div1 = document.getElementById("Caballero1");
        var div2 = document.getElementById("Caballero2");
        var div3 = document.getElementById("Caballero3");
        if (caballero < 2) {
            div1.removeAttribute("style");
        } else if (caballero < 4) {
            div2.removeAttribute("style");
        } else if (caballero < 6) {
            div3.removeAttribute("style");
        }
    }
    if (hechicero == 0) {
        var clase = document.getElementById("Hechicero");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (hechicero > 0) {
        var div1 = document.getElementById("Hechicero1");
        var div2 = document.getElementById("Hechicero2");
        if (hechicero < 3) {
            div1.removeAttribute("style");
        } else if (hechicero < 6) {
            div2.removeAttribute("style");
        }
    }
    if (protector == 0) {
        var clase = document.getElementById("Protector");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (protector > 0) {
        var div1 = document.getElementById("Protector1");
        if (protector < 2) {
            div1.removeAttribute("style");
        }
    }
    if (pistolero == 0) {
        var clase = document.getElementById("Pistolero");
        clase.classList.add("byn");
        clase.classList.remove("seleccionado");
    } else if (pistolero > 0) {
        var div1 = document.getElementById("Pistolero1");
        var div2 = document.getElementById("Pistolero2");
        if (pistolero < 2) {
            div1.removeAttribute("style");
        }else if(pistolero < 4){
            div2.removeAttribute("style");
        }
    }
}