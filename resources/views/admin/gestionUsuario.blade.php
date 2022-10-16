
    <!--==============CABECERA======================-->
    
    @include("encabezado")
    @include("headerMenu")
    
    <!--================CUERPO======================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
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
                                <input type="name" id="name" name="name" placeholder="Ricardo" required >
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
                                    <option value="admin">Administrador</option>
                                </select>
                                

                            </div>
                            
                            <div class="inputs-form-reg-us">
                                <button type="submit" class="button-reg">Registrar</button>
                            </div>
                        </form>
                        @error('message')
                            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
                        @enderror
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
                        <td class="title-table">Usuario</td>
                    </tr>
                @foreach ($users as $user)
                <div class="row py-1" ><tr>
                    <div class="col-md-9 d-flex align-items-center" style="display:inline-flex">
                        <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{$user->name}}</a></td>
                        <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{$user->apellidop}}</a></td>
                        <td><a href="{{ route('gestionUsuario-edit',['id' => $user->id])}}">{{$user->username}}</a></td>
                        <td><form action="{{ route('gestionUsuario-destroy', [$user->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td></tr>
                    </div>
                    
                    
                </div>
                    
                @endforeach
                </table>
            </div>
            
            
        </section>
        
    </main>
    <!--================FOOTER======================-->
    
        @include("footer")
    


    


