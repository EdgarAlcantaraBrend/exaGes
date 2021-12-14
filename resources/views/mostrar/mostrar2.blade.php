@extends('layouts.app')

@section('titulo', 'VER')

@section('fondo')

    <div class="" style="background: rgb(1, 7, 88)">

    @section('content')

        <div class="container">
            <div class="row m-3">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        
                        <div class="card-body">
                            <div style="text-align: center">
                                <img src="/img/archivos/{{ $producto->archivo }}" width="60%" >
                            </div>
                            <br>
                            <div>
                                <p class="lead">Nombre: {{ $producto->nombre}}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="card-title text-center">
                                <a href="javascript:history.back()" class="btn btn-primary btn-block btn-lg"><i
                                        class="fas fa-chevron-left"></i>Volver</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>


@endsection
</div>

@endsection