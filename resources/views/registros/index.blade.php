@include("encabezado")

@include("headerMenu")
<br>
<br>

    <div class="container">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <h4>Reportes</h4>
           <div class="col-xl-12">
                <form action="{{ route('registros.index') }}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4" my-1>
                           <input type="text" class="form-control" name="texto" >
                        </div>
                        <div class="col-auto" my-1>
                            <input type="submit" class="btn btn-primary" value="Buscar">

                        </div>
                    </div>

                </form>

           </div> 
                
            


                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>Fecha</th>
                            <th>Hora Ingreso</th>
                            <th>Hora Salida</th>            
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Empresa</th>
                            <th>Patente</th>
                            <th>Numero Estacionamiento</th>
                            <th>Sector</th>
                        </tr>
                    </thead>
                        <tbody>
                        @forelse ($registros1 as $registro1)
                            <tr>
                                <td>{{ $registro1->fecha }}</td>
                                <td>{{ $registro1->hora_ingreso }}</td>
                                <td>{{ $registro1->hora_salida }}</td>
                                <td>{{ $registro1->persona->rut}}</td>
                                <td>{{ $registro1->persona->nombre1}}</td>
                                <td>{{ $registro1->persona->apellido1}}</td>
                                <td>{{ $registro1->persona->apellido2}}</td>
                                <td>{{ $registro1->persona->telefono}}</td>
                                <td>{{ $registro1->persona->email}}</td>
                                <td>{{ $registro1->persona->empresa}}</td>
                                <td>{{ $registro1->patente }}</td>
                                <td>{{ $registro1->estacionamiento->numero }}</td>
                                <td>{{ $registro1->estacionamiento->sector }}</td>

                                @empty
                                <p>No hay registros</p>
                            </tr>
                            
                        @endforelse
                        </tbody>
                </table>
            
    </div>
   
@include("footer")
