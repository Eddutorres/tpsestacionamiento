
@section('content')

<div class="container">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card">
    @include_once("encabezado.php");
    </div>
    </div>
</div>

<div class="col-md-9">
                <div class="card">
                    <div class="card-header">Agregar vehiculo:</div>
                    <div class="card-body">

                        <div class="row">

                        <div class="input-reg-veh">
                                    <label>Patente: </label>
                                    <input type="text" placeholder="xsxd89" style="width: 70px;" required>
                                </div>
                            <div class="input-reg-veh">
                                    <Label>Nombre: </Label>
                                    <input type="text" placeholder="Esteban Riquelme" required>
                                </div>

                                <div class="input-reg-veh">
                                    <Label>Rut: </Label>
                                    <input type="text" placeholder="Esteban Riquelme" required>
                                </div>
                            
                            <div class="input-reg-veh">
                                    <Label>Hra. Ingreso: </Label>
                                    <input type="time" required>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection