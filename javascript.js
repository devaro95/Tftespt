
var asesino = 0, espadachin = 0, luchador = 0, cazador = 0, elem = 0, cam = 0, caballero = 0, hechicero = 0;
var protector = 0, pistolero = 0, noble = 0, demonio = 0, imperial = 0, glacial = 0, ninja = 0, pirata = 0, yordle = 0; salvaje = 0;
var vacio = 0, fantasma = 0, robot = 0, dragon = 0, exiliado = 0;
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
var arrayNoble = ["Garen", "Fiora", "Kayle", "Lucian", "Leona", "Vayne"];
var arrayDemonio = ["Aatrox", "Brand", "Elise", "Evelynn", "Morgana", "Swain", "Varus"];
var arrayImperial = ["Darius", "Draven", "Katarina", "Swain"];
var arrayGlacial = ["Anivia", "Ashe", "Braum", "Lissandra", "Volibear", "Sejuani"];
var arrayNinja = ["Akali", "Zed", "Kennen", "Shen"];
var arrayPirata = ["Graves", "MissFortune", "Pyke", "Gangplank"];
var arrayYordle = ["Gnar", "Kennen", "Poppy", "Veigar", "Tristana", "Lulu"];
var arraySalvaje = ["Ahri", "Gnar", "Warwick", "Nidalee", "Rengar"];
var arrayVacio = ["Chogath", "RekSai", "Khazix", "Kassadin"];
var arrayFantasma = ["Karthus", "Kindred", "Mordekaiser"];
var arrayRobot = ["Blitzcrank"];
var arrayDragon = ["Shyvana", "AurelionSol"];
var arrayExiliado = ["Yasuo"];

function mostrarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "visible";
}
function ocultarCaja(arg) {
    var caja = document.getElementById("caja" + arg);
    caja.style.visibility = "hidden";
}
function mostrarSinergia(arg) {
    var caja = document.getElementById("cajaOculta" + arg);
    caja.style.visibility = "visible";
}
function ocultarSinergia(arg) {
    var caja = document.getElementById("cajaOculta" + arg);
    caja.style.visibility = "hidden";
}

function select(arg) {
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
    var numDemonio = document.getElementById("numDemonio");
    var numNoble = document.getElementById("numNoble");
    var numImperial = document.getElementById("numImperial");
    var numGlacial = document.getElementById("numGlacial");
    var numNinja = document.getElementById("numNinja");
    var numPirata = document.getElementById("numPirata");
    var numYordle = document.getElementById("numYordle");
    var numSalvaje = document.getElementById("numSalvaje");
    var numVacio = document.getElementById("numVacio");
    var numFantasma = document.getElementById("numFantasma");
    var numRobot = document.getElementById("numRobot");
    var numDragon = document.getElementById("numDragon");
    var numExiliado = document.getElementById("numExiliado");

    img.style.filter = "grayscale(100%)";
    img.setAttribute("onclick", "deselect('" + arg + "');");
    var seleccionados = document.getElementById("seleccionados");
    seleccionados.innerHTML += "<img class='imagen grande' id=" + arg + "In onclick=deselect('" + arg + "') src='Images/Campeones/" + arg + ".png'>";
    //aumento de contadores clases
    if (arrayAsesinos.indexOf(arg) != -1) {
        asesino++;
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
    } if (arrayEspadachin.indexOf(arg) != -1) {
        espadachin++;
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
    } if (arrayLuchador.indexOf(arg) != -1) {
        luchador++;
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
    } if (arrayCazador.indexOf(arg) != -1) {
        cazador++;
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
    } if (arrayElem.indexOf(arg) != -1) {
        elem++;
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
    } if (arrayCam.indexOf(arg) != -1) {
        cam++;
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
    } if (arrayCaballero.indexOf(arg) != -1) {
        caballero++;
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
    } if (arrayHechiero.indexOf(arg) != -1) {
        hechicero++;
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
    } if (arrayProtector.indexOf(arg) != -1) {
        protector++;
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
    } if (arrayPistolero.indexOf(arg) != -1) {
        pistolero++;
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
    //aumento de contadores origenes
    if (arrayNoble.indexOf(arg) != -1) {
        noble++;
        //Noble
        if (noble > 0) {
            var clase = document.getElementById("Noble");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            numNoble.innerHTML = noble;
            if (noble == 3) {
                var div1 = document.getElementById("Noble1");
                div1.style.backgroundColor = "#c9aa71"
            } else if (noble == 6) {
                var div1 = document.getElementById("Noble2");
                div1.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayDemonio.indexOf(arg) != -1) {
        demonio++;
        //Demonio
        if (demonio > 0) {
            var clase = document.getElementById("Demonio");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Demonio1");
            var div2 = document.getElementById("Demonio2");
            var div3 = document.getElementById("Demonio3");
            numDemonio.innerHTML = demonio;
            if (demonio == 2) {
                div1.style.backgroundColor = "#c9aa71"
            } else if (demonio == 4) {
                div2.style.backgroundColor = "#c9aa71"
            } else if (demonio == 6) {
                div3.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayImperial.indexOf(arg) != -1) {
        imperial++;
        //Imperial
        if (imperial > 0) {
            var clase = document.getElementById("Imperial");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Imperial1");
            var div2 = document.getElementById("Imperial2");
            numImperial.innerHTML = imperial;
            if (imperial == 2) {
                div1.style.backgroundColor = "#c9aa71"
            } else if (imperial == 4) {
                div2.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayGlacial.indexOf(arg) != -1) {
        glacial++;
        //Glacial
        if (glacial > 0) {
            var clase = document.getElementById("Glacial");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Glacial1");
            var div2 = document.getElementById("Glacial2");
            var div3 = document.getElementById("Glacial3");
            numGlacial.innerHTML = glacial;
            if (glacial == 2) {
                div1.style.backgroundColor = "#c9aa71"
            } else if (glacial == 4) {
                div2.style.backgroundColor = "#c9aa71"
            } else if (glacial == 6) {
                div3.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayNinja.indexOf(arg) != -1) {
        ninja++;
        //Ninja
        if (ninja > 0) {
            var clase = document.getElementById("Ninja");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Ninja1");
            var div2 = document.getElementById("Ninja2");
            numNinja.innerHTML = ninja;
            if (ninja == 1) {
                div1.style.backgroundColor = "#c9aa71"
            } else if (ninja == 4) {
                div2.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayPirata.indexOf(arg) != -1) {
        pirata++;
        //Pirata
        if (pirata > 0) {
            var clase = document.getElementById("Pirata");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Pirata1");
            var div2 = document.getElementById("Pirata2");
            numPirata.innerHTML = pirata;
            if (pirata == 3) {
                div1.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayYordle.indexOf(arg) != -1) {
        yordle++;
        //Yordle
        if (yordle > 0) {
            var clase = document.getElementById("Yordle");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Yordle1");
            var div2 = document.getElementById("Yordle2");
            numYordle.innerHTML = yordle;
            if (yordle == 3) {
                div1.style.backgroundColor = "#c9aa71"
            } else if (yordle == 6) {
                div2.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arraySalvaje.indexOf(arg) != -1) {
        salvaje++;
        //Salvaje
        if (salvaje > 0) {
            var clase = document.getElementById("Salvaje");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Salvaje1");
            var div2 = document.getElementById("Salvaje2");
            numSalvaje.innerHTML = salvaje;
            if (salvaje == 2) {
                div1.style.backgroundColor = "#c9aa71"
            } else if (salvaje == 4) {
                div2.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayVacio.indexOf(arg) != -1) {
        vacio++;
        //Vacio
        if (vacio > 0) {
            var clase = document.getElementById("Vacio");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Vacio1");
            numVacio.innerHTML = vacio;
            if (vacio == 3) {
                div1.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayFantasma.indexOf(arg) != -1) {
        fantasma++;
        //Fantasma
        if (fantasma > 0) {
            var clase = document.getElementById("Fantasma");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Fantasma1");
            numFantasma.innerHTML = fantasma;
            if (fantasma == 2) {
                div1.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayRobot.indexOf(arg) != -1) {
        robot++;
        //Robot
        if (robot > 0) {
            var clase = document.getElementById("Robot");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Robot1");
            numRobot.innerHTML = robot;
            if (robot == 1) {
                div1.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayDragon.indexOf(arg) != -1) {
        dragon++;
        //Dragon
        if (dragon > 0) {
            var clase = document.getElementById("Dragon");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Dragon1");
            numDragon.innerHTML = dragon;
            if (dragon == 2) {
                div1.style.backgroundColor = "#c9aa71"
            }
        }
    } if (arrayExiliado.indexOf(arg) != -1) {
        exiliado++;
        //Exiliado
        if (exiliado > 0) {
            var clase = document.getElementById("Exiliado");
            clase.classList.remove("byn");
            clase.classList.add("seleccionado");
            var div1 = document.getElementById("Exiliado1");
            numExiliado.innerHTML = exiliado;
            if (exiliado == 1) {
                div1.style.backgroundColor = "#c9aa71"
            }
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
    //Decremento de contadores clases
    if (arrayAsesinos.indexOf(arg) != -1) {
        asesino--;
        numAsesino.innerHTML = asesino;
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
    } if (arrayEspadachin.indexOf(arg) != -1) {
        espadachin--;
        numEspadachin.innerHTML = espadachin;
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
    } if (arrayLuchador.indexOf(arg) != -1) {
        luchador--;
        numLuchador.innerHTML = luchador;
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
    } if (arrayCazador.indexOf(arg) != -1) {
        cazador--;
        numCazador.innerHTML = cazador;
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
    } if (arrayElem.indexOf(arg) != -1) {
        elem--;
        numElem.innerHTML = elem;
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
    } if (arrayCam.indexOf(arg) != -1) {
        cam--;
        numCam.innerHTML = cam;
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
    } if (arrayCaballero.indexOf(arg) != -1) {
        caballero--;
        numCaballero.innerHTML = caballero;
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
    } if (arrayHechiero.indexOf(arg) != -1) {
        hechicero--;
        numHechicero.innerHTML = protector;
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
    } if (arrayProtector.indexOf(arg) != -1) {
        protector--;
        numProtector.innerHTML = protector;
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
    } if (arrayPistolero.indexOf(arg) != -1) {
        pistolero--;
        numPistolero.innerHTML = pistolero;
        if (pistolero == 0) {
            var clase = document.getElementById("Pistolero");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (pistolero > 0) {
            var div1 = document.getElementById("Pistolero1");
            var div2 = document.getElementById("Pistolero2");
            if (pistolero < 2) {
                div1.removeAttribute("style");
            } else if (pistolero < 4) {
                div2.removeAttribute("style");
            }
        }
    }
    //Decremento contadores origenes
    if (arrayNoble.indexOf(arg) != -1) {
        noble--;
        numNoble.innerHTML = noble;
        if (noble == 0) {
            var clase = document.getElementById("Noble");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (noble > 0) {
            var div1 = document.getElementById("Noble1");
            var div2 = document.getElementById("Noble2");
            if (noble < 3) {
                div1.removeAttribute("style");
            } else if (noble < 6) {
                div2.removeAttribute("style");
            }
        }
    } if (arrayDemonio.indexOf(arg) != -1) {
        demonio--;
        numDemonio.innerHTML = demonio;
        if (demonio == 0) {
            var clase = document.getElementById("Demonio");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (demonio > 0) {
            var div1 = document.getElementById("Demonio1");
            var div2 = document.getElementById("Demonio2");
            var div3 = document.getElementById("Demonio3");
            if (demonio < 2) {
                div1.removeAttribute("style");
            } else if (demonio < 4) {
                div2.removeAttribute("style");
            } else if (demonio < 6) {
                div3.removeAttribute("style");
            }
        }
    } if (arrayImperial.indexOf(arg) != -1) {
        imperial--;
        numImperial.innerHTML = imperial;
        if (imperial == 0) {
            var clase = document.getElementById("Imperial");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (imperial > 0) {
            var div1 = document.getElementById("Imperial1");
            var div2 = document.getElementById("Imperial2");
            if (imperial < 2) {
                div1.removeAttribute("style");
            } else if (imperial < 4) {
                div2.removeAttribute("style");
            }
        }
    } if (arrayGlacial.indexOf(arg) != -1) {
        glacial--;
        numGlacial.innerHTML = glacial;
        if (glacial == 0) {
            var clase = document.getElementById("Glacial");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (glacial > 0) {
            var div1 = document.getElementById("Glacial1");
            var div2 = document.getElementById("Glacial2");
            var div3 = document.getElementById("Glacial3");
            if (glacial < 2) {
                div1.removeAttribute("style");
            } else if (glacial < 4) {
                div2.removeAttribute("style");
            } else if (glacial < 6) {
                div3.removeAttribute("style");
            }
        }
    } if (arrayNinja.indexOf(arg) != -1) {
        ninja--;
        numNinja.innerHTML = ninja;
        if (ninja == 0) {
            var clase = document.getElementById("Ninja");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
            var div1 = document.getElementById("Ninja1");
            div1.removeAttribute("style");
        } else if (ninja > 0) {
            var div2 = document.getElementById("Ninja2");
            if (ninja < 4) {
                div2.removeAttribute("style");
            }
        }
    } if (arrayYordle.indexOf(arg) != -1) {
        yordle--;
        numYordle.innerHTML = yordle;
        if (yordle == 0) {
            var clase = document.getElementById("Yordle");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (yordle > 0) {
            var div1 = document.getElementById("Yordle1");
            var div2 = document.getElementById("Yordle2");
            if (yordle < 3) {
                div1.removeAttribute("style");
            } else if (yordle < 6) {
                div2.removeAttribute("style");
            }
        }
    } if (arraySalvaje.indexOf(arg) != -1) {
        salvaje--;
        numSalvaje.innerHTML = salvaje;
        if (salvaje == 0) {
            var clase = document.getElementById("Salvaje");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (salvaje > 0) {
            var div1 = document.getElementById("Salvaje1");
            var div2 = document.getElementById("Salvaje2");
            if (salvaje < 2) {
                div1.removeAttribute("style");
            } else if (salvaje < 4) {
                div2.removeAttribute("style");
            }
        }
    } if (arrayPirata.indexOf(arg) != -1) {
        pirata--;
        numPirata.innerHTML = pirata;
        if (pirata == 0) {
            var clase = document.getElementById("Pirata");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (pirata > 0) {
            var div1 = document.getElementById("Pirata1");
            var div2 = document.getElementById("Pirata2");
            if (pirata < 3) {
                div1.removeAttribute("style");
            }
        }
    } if (arrayVacio.indexOf(arg) != -1) {
        vacio--;
        numVacio.innerHTML = vacio;
        if (vacio == 0) {
            var clase = document.getElementById("Vacio");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (vacio > 0) {
            var div1 = document.getElementById("Vacio1");
            if (vacio < 3) {
                div1.removeAttribute("style");
            }
        }
    } if (arrayFantasma.indexOf(arg) != -1) {
        fantasma--;
        numFantasma.innerHTML = fantasma;
        if (fantasma == 0) {
            var clase = document.getElementById("Fantasma");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (fantasma > 0) {
            var div1 = document.getElementById("Fantasma1");
            if (fantasma < 2) {
                div1.removeAttribute("style");
            }
        }
    } if (arrayRobot.indexOf(arg) != -1) {
        robot--;
        numRobot.innerHTML = robot;
        if (robot == 0) {
            var clase = document.getElementById("Robot");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
            var div1 = document.getElementById("Robot1");
            div1.removeAttribute("style");
        }
    } if (arrayDragon.indexOf(arg) != -1) {
        dragon--;
        numDragon.innerHTML = dragon;
        if (dragon == 0) {
            var clase = document.getElementById("Dragon");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
        } else if (dragon > 0) {
            var div1 = document.getElementById("Dragon1");
            if (dragon < 2) {
                div1.removeAttribute("style");
            }
        }
    } if (arrayExiliado.indexOf(arg) != -1) {
        exiliado--;
        numExiliado.innerHTML = exiliado;
        if (exiliado == 0) {
            var clase = document.getElementById("Exiliado");
            clase.classList.add("byn");
            clase.classList.remove("seleccionado");
            var div1 = document.getElementById("Exiliado1");
            div1.removeAttribute("style");
        }
    }
}