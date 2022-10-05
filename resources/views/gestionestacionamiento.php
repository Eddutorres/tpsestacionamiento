<?php
include_once("encabezado.php");
?>
<body>
    <!--==============CABECERA======================-->
    <?php
    include_once("headerMenu.php");
    ?>
    <!--================CUERPO======================-->
    <main class="contenido-cuerpo">
        <section class="menu-nav-est">
            <div class="naveg-reg-veh">
            <!--  -->
            <!-- Modal 1 -->
            <!--  -->
                <div class="button-modal">
                    <button class="button-modal-reg-veh" id="open">Registrar salida</button>
                    <div id="modal_container" class="modal_container_salida">
                        <div class="modal">
                            <h1 class="h1-modal">Registro salida</h1>
                            
                            <div class="reg-busqueda">
                                <label>Buscar patente</label>
                                <input class="input_reg_salida"  type="text" placeholder="XS6452">
                                <button class="button-modal-reg-veh">Buscar</button>
                            </div>

                            <hr>

                            <div class="reg-busqueda">
                                <label>Hora Entrada: </label>
                                <input class="input_reg_salida" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label>Nombre: </label>
                                <input class="input_reg_salida" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label>Rut: </label>
                                <input class="input_reg_salida" type="text">
                            </div>

                            <div class="reg-busqueda">
                                <label for="">Hora salida: </label>
                                <input class="input_reg_salida" type="time">
                            </div>

                            <div class="reg-busqueda-button">
                                <button class="button-modal-reg-veh" id="close">Registrar</button>
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
            </div>
        </section>
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
                        <?php
                            include_once('antoniovaras.php')
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <script src="../js/estacionamiento.js">
        </script>
        <script src="../js/funcionBotones.js"></script>
    </main>
    <!--FOOTER-->
    <?php
    include_once('footer.php')
    ?>
</body>

</html>