@include("encabezado");

<body>
    <!--==============CABECERA======================-->
  
   @include("headerMenu");
   

    <main class="contenido-cuerpo">
       @section('content')
            
            <!--  -->
            <!-- Modal 1 -->
            <!--  -->
     
                <div class="button-modal">
                    <button class="button-modal-reg-veh"  id="open">Registrar salida</button>

                    <form action="/gestionestacionamientovaras" method="POST"  role="form">

                         {{csrf_field()}}
                    <div id="modal_container" class="modal_container_salida">

                        <div class="modal">
                            <h1 class="h1-modal">Registro salida</h1>
                            <form action="/gestionestacionamientovaras" method="GET" role="form">
                            <div class="reg-busqueda">
                                <label>Buscar patente</label>
                                <input name="patente"  type="text" placeholder="XS6452" value="{{$patente}}">
                                <button type="submit" class="button-modal-reg-veh">Buscar</button>
                            </div>
                             </form>
                            <hr>

                            <div class="reg-busqueda">
                                <label>Hora Entrada: </label>
                                <input name="hora_entrada"  type="time">
                            </div>

                            <div class="reg-busqueda">
                                <label>Nombre: </label>
                                <input name="nombre" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label>Rut: </label>
                                <input name="rut" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label for="">Hora salida: </label>
                                <input name="hora_salida" type="time">
                            </div>

                            <div class="reg-busqueda-button">
                                <button type="submit" class="button-modal-reg-veh" id="close">Registrar</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

   
                <!--  -->
                <!-- modal 2 -->
                <!--  -->
                <div class="button-modal">
                    <button class="button-modal-reg-veh" id="open2">Modificar</button>
                    <div id="modal_container2" class="modal_container_modifica">
                        <div class="modal2">
                            <h1>Modificar Estacionamiento</h1>
                            <button class="button-modal-reg-veh" id="close2">Modificar</button>
                        </div>
                    </div>
                </div>
                </form>
                <!-- CONTENIDO DE PAGINA -->
        <hr>

        <div class="titulo-pag">
                <div class="titulo-estacionamiento">
                <h2>Estacionamiento Antonio varas</h2>
                </div>
                <div class="cont-antvar">
                    <div class="contador">
                        <h3 class="contador-estado">Total: </h3>
                    </div>
                    <div class="contador">
                        <h3 class="contador-estado">Disponibles: </h3>
                    </div>
                    <div class="contador">
                        <h3 class="contador-estado" id="diferencia1">Usados: </h3>
                    </div>
                    
                </div>
            </div>
            <section class="grilla-reg-ing">
                <div class="estacionamientos">
                    <div class="input-reg-veh">
                        
                            @include('antoniovaras')
                        
                    </div>
                </div>
            </section>
        </div>

        <script src="../js/estacionamiento.js">
        </script>
        <script src="../js/funcionBotones.js"></script>
    </main>
    <!--FOOTER-->
    
    @include('footer')

</body>

</html>