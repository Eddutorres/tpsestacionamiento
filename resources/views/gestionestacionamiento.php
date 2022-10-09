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
            <!-- Boton cambio de Area Estacionamientos -->
            <!--  -->
                <div class="button-modal">
                    <input class="button-modal-reg-veh" type="checkbox" name="" value="Cambiar Area" id="boton1" onclick = "funcion();">
                </div>
            <!--================MODALS======================-->  
            <?php
            include_once("modals.php");
            ?>
        </section>
        <!------------------- CONTENIDO DE PAGINA ----------------------------------------------------->
        <hr>
        
        <?php
        function accion(){
            echo "accion";
        }
        function acciondos(){
            echo 19;
        }
        ?>

        <script>
        function funcion(){
            alert('<?php echo accion(); ?>');
            alert(<?php echo acciondos(); ?>);
            /* Escribir en el Documento*/
            if (condition) {
                
            }
            // document.write('<?php echo accion(); ?>');
            // document.write(<?php echo acciondos(); ?>);
        }
        </script>   
        <!---------------------------------------------------------PENDIENTE DE RESOLVER------------------------------------>

        <div class="titulo-pag" >
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
            <div>
                <section class="grilla-reg-ing" id='area'>
                    <?php
                    include_once('antoniovaras.php')
                    ?>            
                </section>
            </div>
        </div>
        <script src="../js/estacionamiento.js"></script>
        <script src="../js/funcionestacionamiento.js"></script>
        <script src="../js/funcionBotones.js"></script>
    </main>
    <!--FOOTER-->
    <?php
    include_once('footer.php')
    ?>
</body>

</html>