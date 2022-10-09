var classpark =estadoActual="";


// funcion que se activa con el click
function click_here(button_id)
    {  // funcion que toma el id y muestra la clase
        classpark= document.getElementById(button_id);        
        estadoActual= classpark.className;
        // alert("id:"+button_id + "  clase:"+estadoActual); 

        if (estadoActual=='desocupado') {
            //Cambia la propiedad de la clase.
            document.getElementById(button_id).className ="ocupado";
        }else{
            //Cambia la propiedad de la clase.
            document.getElementById(button_id).className ="desocupado";
        }
         
        
        // alert('cambiado');

       
        // return classpark;
    }



//funcion que cambia la clase del objeto buscado por id
// document.getElementById('myElement').className = "myclass";









