<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--==============CABECERA======================-->
    
    @include("encabezado");
    @include("headerMenu");
    
    <!--================CUERPO======================-->
    <main class="contenido-cuerpo">
        <section class="contenido-usuario">
            <div class="form-registro">
                <div class="form-user">
                    <div class="contenido1">
                        <h2>Agregar Usuarios</h2>
                        
                        <form class="register-user-form" method="POST" action="">
                            @csrf
                            <div class="inputs-form-reg-us">
                                <Label>Nombre: </Label>
                                <input type="name" id="name" name="name" placeholder="Ricardo" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <Label>Ap. Paterno: </Label>
                                <input type="apellidop" id="apellidop" name="apellidop" placeholder="Lopez" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <Label>Ap. Materno: </Label>
                                <input type="apellidom" id="apellidom" name="apellidom" placeholder="Galindo" required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Rut: </label>
                                <input type="rut" name='rut' id='rut' required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Username: </label>
                                <input type="username" name='username' id='username' required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Password: </label>
                                <input type="password" name='password' id='password' required>
                            </div>
                            <div class="inputs-form-reg-us">
                                <label>Rol: </label>
                                <select class="combolista" name="role" id='role' onchange="combo(this,'role')">
                                    <option value="operador">Operador</option>
                                    <option value="administrador">Administrador</option>
                                </select>
                                

                            </div>
                            <div class="inputs-form-reg-us">
                                <button type="submit" class="button-reg">Registrar</button>
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
    
        @include("footer");
    


    
</body>
</html>

