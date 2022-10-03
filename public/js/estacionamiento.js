////////////////////////////////////////////////
//////MOSTRAR ESTACIONAMIENTO COMBOBOX

let estacionamientos = ["Antonio Varas", "Prat"];
let sectores = [01, 02, 03, 04, 05 ];

let combobox1 = document.getElementById("combobox1");
let combobox2 = document.getElementById("combobox2");


// funcion crear listado de formulario sector
function Recorrer(combobox, valores) {
    Borrar();
    combobox2.innerHTML = "";
    for (let index of valores) {
        combobox.innerHTML += `
        <option selected>${index}</option>
        `;
    }
}
// FUNCION QUE OCULTA TODOS LOS PLANOS DE ESTACIONAMIENTOS
function Borrar(){
// recorro los sectores y los oculto todos
for (let index = 0; index < sectores.length; index++) {
    const element = sectores[index];
        document.getElementById('sector'+element).style.display = "none";
        console.log('ocultando plano',element);       
    }
}



function llenarEst() {
    Recorrer(combobox1, estacionamientos);
}
llenarEst();

combobox1.addEventListener("change", (e) => {
    let dato = e.target.value;
    
    Borrar();

    switch (dato) {
    
        case "Antonio Varas":
            Recorrer(combobox2, sectores.slice(0, 5));
            combobox2.addEventListener("change", (e) => {
                
                Borrar();

                let num = e.target.value;
                console.log('let=', num);
                console.log('A varas sector'+num);
                document.getElementById('sector'+num).style.display = "block";

    });
            break;


        case "Prat":
            Recorrer(combobox2, sectores.slice(0, 3));
            combobox2.addEventListener("change", (e) => {
                Borrar();

                let num = e.target.value;
                console.log('let=', num);
                console.log('Prat sector'+num);
                document.getElementById('sector'+num).style.display = "block";
                

        });
            break;
        default:
            break;
    }
});



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
// drawSector1prat();









// -----------------------------------------------------------------------
// -----------------------------------------------------------------------
// -----------------------------------------------------------------------



// // funcion mostrar solo el sector seleccionado
function Mostrar(numero){
    //document.getElementById(numero).style.display = "block";
    console.log("aca funcion mostrar", numero);
}

combobox2.addEventListener("change", (e) => {
    let sectorSelected = parseInt(e.target.value);
        console.log("aca add eventlistener", sectorSelected);
        Mostrar(sectorSelected);
})