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
        <section class="contenido-usuario">
            <div class="form-registro">
                <div class="form-user">
                    <div class="contenido1">
                        <h2>Agregar Usuarios</h2>
                        <form class="register-user-form">
                            <div class="inputs-form-reg-us">
                                <Label>Nombre: </Label>
                                <input type="text" placeholder="Ricardo" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <Label>Ap. Paterno: </Label>
                                <input type="text" placeholder="Lopez" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <Label>Ap. Materno: </Label>
                                <input type="text" placeholder="Galindo" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Rut: </label>
                                <input type="text" placeholder="13.987.635-5" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Rol: </label>
                                <select class="combolista" name="optionlist" onchange="combo(this,'rol')">
                                    <option value="operador">Operador</option>
                                    <option value="administrador">Administrador</option>
                                </select>
                            </div>
                            <div class="inputs-form-reg-us">
                                <button class="button-reg">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="user-grilla">
            <div class="contenido2">
                <table class="table-grilla">
                    <tr>
                        <td class="title-table">Nombre</td>
                        <td class="title-table">Apellido Paterno</td>
                        <td class="title-table">Apellido Materno</td>
                        <td class="title-table">Rut</td>
                        <td class="title-table">Usuario</td>
                        <td class="title-table">Contraseña</td>
                        <td class="title-table">Rol</td>
                        <td><input type="button" class="Modificar" value="Modificar"></td>
                        <td><input type="button" class="borrar" value="Eliminar"></td>
                    </tr>
                </table>
            </div>
        </section>
        
    </main>
    <!--================FOOTER======================-->
    <?php
        include_once("footer.php");
    ?>

</body>

</html>