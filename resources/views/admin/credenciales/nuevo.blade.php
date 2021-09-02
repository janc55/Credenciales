@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('credencial.store')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <label for="" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" required>
                        <br>
                        <label for="" class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="apellidos" required>
                        <br>
                        <label for="" class="form-label">Cedula de identidad: </label>
                        <input type="number" class="form-control" name="cedula_identidad" required>
                        <br>
                        <select class="form-control" aria-label=".form-select-sm example" name="ciudad" required>
                            <option selected disabled value="">Ciudad Nacimiento</option>
                            <option>Oruro</option>
                            <option>La Paz</option>
                            <option>Potosí</option>
                            <option>Cochabamba</option>
                            <option>Sucre</option>
                            <option>Santa Cruz</option>
                            <option>Tarija</option>
                            <option>Beni</option>
                            <option>Pando</option>
                        </select>
                        <br>
                        <label for="" class="form-label">Cargo: </label>
                        <input type="text" class="form-control" name="cargo" required>
                        <br>
                        <label for="" class="form-label">Fecha de nacimiento: </label>
                        <input type="date" class="form-control" name="fecha_nacimiento" required>
                        <br>
                        <label for="" class="form-label">Correo electrónico: </label>
                        <input type="email" class="form-control" name="correo" required>
                        <br>
                        <label for="" class="form-label">Celular: </label>
                        <input type="text" class="form-control" name="celular" required>
                        <br>
                        <label for="" class="form-label">Tipo de sangre: </label>
                        <input type="text" class="form-control" name="tipo_sangre" required>
                        <br>
                        <label for="" class="form-label">Imagen: </label>
                        <input type="file" class="form-control-file" name="imagen">
                        <br>
                        <input type="submit" value="Crear credencial" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection