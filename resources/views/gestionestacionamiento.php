<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/fontello.css">

    <title>TPS Parking</title>
</head>

<body>
    <!--============================================-->
    <!--==============CABECERA======================-->
    <!--============================================-->
    <header class="header">
        <div class="contenedor">
            <img class="logo" src="../img/tps_web2021.png" alt="logo">
            <input type="checkbox" id="menu-bar">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="naveg">
                <a class="navegador" href="#">Gestion de Estacionamientos</a>
                <a class="navegador" href="./gestionUsuario.html">Administrador de usuario</a>
                <a class="navegador" href="./reportes.html">Reportes</a>
                <button class="cerrar_sesion" id="cerrar_sesion">Cerrar sesion</button>
            </nav>
        </div>
    </header>
    <!--============================================-->
    <!--================CUERPO======================-->
    <!--============================================-->
    <main class="contenido-cuerpo">
        <section class="menu-nav-est">
            <div class="naveg-reg-veh">
                
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
                
                <!-- modal 2 -->
                <div class="button-modal">
                    <button class="button-modal-reg-veh" id="open2">Modificar</button>
                    <div id="modal_container2" class="modal_container_modifica">
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

        <script src="../js/estacionamiento.js">
        </script>
        <script src="../js/funcionBotones.js"></script>
    </main>
    <!--FOOTER-->
    <footer class="footer">
        <div class="contacto">
            <p><strong>@ TPSV Terminal Pacifico Sur Valparaíso Chile</strong></p>
        </div>
    </footer>

</body>

</html>