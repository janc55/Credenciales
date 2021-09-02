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
                    <div>
                        <a href="{{route('credencial.create')}}" class="btn btn-primary">Nuevo Credencial</a>
                    </div>
                    <div class="mt-3" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">CI</th>
                                <th scope="col">Imprimir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lista_credenciales as $lista )
                            <tr>
                                <td scope="row">{{$lista->nombres}}</td>
                                <td>{{$lista->apellidos}}</td>
                                <td>{{$lista->cedula_identidad}}</td>
                                <td>
                                    <a href="/credencial/{{ $lista->id }}/enlace_qr" class="btn btn-warning btn-sm" >Crear QR</a>
                                    <a href="/credencial/{{ $lista->id }}/imprimir" class="btn btn-success btn-sm" >Imprimir</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        
                            
                        
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection