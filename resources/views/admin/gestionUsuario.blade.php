
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
                @foreach ($users as $user)
                <div class="row py-1"><tr>
                    <div class="col-md-9 d-flex align-items-center">
                       <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{ $user->name }}</a></td>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <td><form action="{{ route('gestionUsuario-destroy', [$user->id]) }}" method="POST"></td>
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                    </tr>
                </div>
                    
                @endforeach
                </table>
            </div>
            <!--<div class="contenido2">
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
            </div>-->
            
        </section>
        
    </main>
    <!--================FOOTER======================-->
    
        @include("footer");
    


    


