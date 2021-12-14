@extends('layouts.app')

@section('titulo', 'HISTORIALDE ARCHIVOS')

@section('fondo')

    <div class="" style="background: rgb(1, 7, 88)">

    @section('content')

        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-12">
                    <h1 class="display-5 text-center" style="color:deepskyblue">HISTORIAL DE ARCHIVOS</h1>
                    <div class="row">
                        <div class="col-sm-3 m-2">
                            
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-2">{{ $productos->links() }}</div>
                    </div>
                    <table class="table clase_table text-center" style="color:rgb(167, 164, 164)">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre del archivo</th>
                                
                                <th scope="col">Ver</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td><strong>{{ $producto->id }}</strong></td>
                                    <td>{{ $producto->nombre }}</td>
                                    
                                    
                                    
                                    
                                    <td>
                                        <a href="{{ route('mostrar.mostrar2', $producto->id) }}" class="btn btn-success">
                                            Ver
                                        </a>
                                    </td>
                                    
                                    <td>
                                        <form action="{{ route('archivos.destroy', $producto->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-primary">
                                            Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{'home'}}" class="btn btn-warning btn-lg">
                        <i class="fas fa-plus"></i> Volver al menu principal
                    </a>
                </div>
            </div>
        </div>

    @endsection
</div>

@endsection
