@include("encabezado");
<body>
    <!--============================================-->
    <!--==============CABECERA======================-->
    <!--============================================-->
    
    @include("headerMenu");
    
    <!--============================================-->
    <!--================CUERPO======================-->
    <!--============================================-->
    <main class="contenido-cuerpo">
        <section class="menu-nav-est">
            <div class="naveg-reg-veh">
                <!-- modal 1 -->
                <div>
                    <button class="button-modal-reg-veh" id="open">Registrar salida</button>
                    <div id="modal_container" class="modal-container">
                        <div class="modal">
                            <h1>Registro salida</h1>
                            <label>Buscar</label>
                            <input type="text" placeholder="Rut">
                            <button class="button-modal-reg-veh" id="close">Cerrar</button>
                        </div>
                    </div>
                </div>
                
                <!-- modal 2 -->
                <div>
                    <button class="button-modal-reg-veh" id="open2">Modificar</button>
                    <div id="modal_container2" class="modal-container2">
                        <div class="modal2">
                            <h1>Modificar Estacionamiento</h1>
                            <button class="button-modal-reg-veh" id="close2">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <div class="caja-reg-veh">
            <section class="contenido-usuario-reg">
                <div class="form-registro-veh">
                    <div class="form-user-veh">
                        <div class="contenido1-reg-veh">
                            <h2>Registro Ingreso</h2>
                            <form class="estacionamiento-igreso-form">
                                <div class="input-reg-veh">
                                    <label>Patente: </label>
                                    <input type="text" placeholder="xsxd89" style="width: 70px;" required>
                                </div>
                                <div class="input-reg-veh">
                                    <Label>Nombre: </Label>
                                    <input type="text" placeholder="Esteban Riquelme" required>
                                </div>
                                <div class="input-reg-veh">
                                    <label>Contacto: </label>
                                    <input type="tel" placeholder="9541231235" required style="width: 100px;">
                                </div>
                                <div class="input-reg-veh">
                                    <Label>Hra. Ingreso: </Label>
                                    <input type="time" required>
                                </div>
                                <div class="input-reg-est">
                                    <Label>Estacionamiento:  </Label>

                                    <select class="comboreg" id="combobox1">
                                        <option selected>------</option>
                                    </select>
                                </div>

                                <div class="input-reg-veh">
                                    <Label>Sector: </Label>

                                    <select class="comboreg" id="combobox2">
                                        <option selected>----------</option>      
                                    </select>
                                </div>
                                <div class="select-est">
                                    <label>N° Estacionamiento</label>
                                    <input type="text" style="width: 40px;">
                                </div>
                                <button class="button-reg-veh">Registrar Ingreso</button>

                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="grilla-reg-ing">

                <div class="estacionamientos">
                    <div class="input-reg-veh">
                        <div class="estac-dib" id='sector1'></div>
                        <div class="estac-dib" id='sector2'></div>
                        <div class="estac-dib" id='sector3'></div>
                        <div class="estac-dib" id='sector4'></div>
                        <div class="estac-dib" id='sector5'></div>
                    </div>
                </div>
                <div class="contador">
                    <div class="texto">
                        <h2>Estacionamiento </h2>
                        <div class="cont-antvar">
                            <h3>Cantidad Antonio varas: 64</h3>
                            <h3 id="contador1">Estado Disponibles: </h3>
                            <h3 id="diferencia1">Usados: </h3>
                        </div>
                        <div class="con-prat">
                            <h3>Cantidad Prat: 31 - motos: 9</h3>
                            <h3 id="contador2">Estado Disponibles: </h3>
                            <h3 id="diferencia1">Usados</h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="../js/estacionamiento.js"></script>
        <script src="../js/funcionBotones.js"></script>
    </main>
    <!--================FOOTER======================-->
    
        @include("footer");
    
</body>

</html>