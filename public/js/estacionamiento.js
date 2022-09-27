////////////////////////////////////////////////
//////MOSTRAR ESTACIONAMIENTO COMBOBOX

let estacionamientos = ["Antonio Varas", "Prat"];
let sectores = [1, 2, 3, 4, 5];

let combobox1 = document.getElementById("combobox1");
let combobox2 = document.getElementById("combobox2");

function Recorrer(combobox, valores) {
    combobox2.innerHTML = "";
    for (let index of valores) {
        combobox.innerHTML += `
        <option selected>${index}</option>
        `;
    }
}

function llenarEst() {
    Recorrer(combobox1, estacionamientos);
}
llenarEst();

combobox1.addEventListener("change", (e) => {
    let dato = e.target.value;

    switch (dato) {
        case "Antonio Varas":
            Recorrer(combobox2, sectores.slice(0, 5));
            break;
        case "Prat":
            Recorrer(combobox2, sectores.slice(0, 3));
            break;
        default:
            break;
    }
});


// function mostrarPlano() {

// var plano1 = document.getElementById('sector1').style.display = "none";
var plano2 = document.getElementById('sector2').style.display = "none";
var plano3 = document.getElementById('sector3').style.display = "none";
var plano4 = document.getElementById('sector4').style.display = "none";
var plano5 = document.getElementById('sector5').style.display = "none";

//     if (estacionamientos == 'Antonio Varas' && sectores == 1) {

//         plano1 = document.getElementById('sector1').style.display = "block";

//     };
// };
// mostrarPlano();



////////////////////////
///CONTADOR
////////////////////



////////////////////////////
// ESTACIONAMIENTOS ANTINIO VARAS
////////////////////////////
// CUADRICULA SECTOR 1
var estadoDict = {
    0: 'disponible',
    1: 'ocupado',
    2: 'calle'
}

var sector1 = [
    [1, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 1],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 1],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 2],
];

function drawSector1() {
    output = "";
    for (var row = 0; row < sector1.length; row++) {
        output += "<div class = 'row'>"
        for (var x = 0; x < sector1[row].length; x++) {
            output += "<div class = '" + estadoDict[sector1[row][x]] + "'></div>"
        }
        output += "</div>"
    }
    document.getElementById('sector1').innerHTML = output;
}
drawSector1();

////////////////////////////
// CUADRICULA SECTOR 2
var sector2 = [
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0]
];

function drawSector2() {
    output = "";
    for (var row = 0; row < sector2.length; row++) {
        output += "<div class = 'row'>"
        for (var x = 0; x < sector2[row].length; x++) {
            output += "<div class = '" + estadoDict[sector2[row][x]] + "'></div>"
        }
        output += "</div>"
    }
    document.getElementById('sector2').innerHTML = output;
}
drawSector2();

////////////////////////////
// CUADRICULA SECTOR 3

var sector3 = [
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
];

function drawSector3() {
    output = "";
    for (var row = 0; row < sector3.length; row++) {
        output += "<div class = 'row'>"
        for (var x = 0; x < sector3[row].length; x++) {
            output += "<div class = '" + estadoDict[sector3[row][x]] + "'></div>"
        }
        output += "</div>"
    }
    document.getElementById('sector3').innerHTML = output;
}
drawSector3();

////////////////////////////
// CUADRICULA SECTOR 4

var sector4 = [
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0],
];

function drawSector4() {
    output = "";
    for (var row = 0; row < sector4.length; row++) {
        output += "<div class = 'row'>"
        for (var x = 0; x < sector4[row].length; x++) {
            output += "<div class = '" + estadoDict[sector4[row][x]] + "'></div>"
        }
        output += "</div>"
    }
    document.getElementById('sector4').innerHTML = output;
}
drawSector4();

////////////////////////////
// CUADRICULA SECTOR 5

var sector5 = [
    [0, 2, 0],
    [0, 2, 0],
    [0, 2, 0]
];

function drawSector5() {
    output = "";
    for (var row = 0; row < sector5.length; row++) {
        output += "<div class = 'row'>"
        for (var x = 0; x < sector5[row].length; x++) {
            output += "<div class = '" + estadoDict[sector5[row][x]] + "'></div>"
        }
        output += "</div>"
    }
    document.getElementById('sector5').innerHTML = output;
}
drawSector5();

//////////////////////////////////
///// ESTACIONAMIENTOS PRAT//////
/////////////////////////////////

/////////////////////////////////
//////SECTOR 1 PRAT

var sector1prat = [
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
    [2, 0],
];

function drawSector1prat() {
    output = "";
    for (var row = 0; row < sector1prat.length; row++) {
        output += "<div class = 'row'>"
        for (var x = 0; x < sector1prat[row].length; x++) {
            output += "<div class = '" + estadoDict[sector1prat[row][x]] + "'></div>"
        }
        output += "</div>"
    }
    document.getElementById('sector1prat').innerHTML = output;
}
drawSector1prat();