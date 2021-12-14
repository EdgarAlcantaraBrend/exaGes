@extends('layouts.app')

@section('titulo', 'HISTORIALDE ARCHIVOS')

@section('fondo')

    <div class="" style="background: rgb(1, 7, 88)">

    @section('content')

        <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-12">
                    <h1 class="display-5 text-center" style="color:deepskyblue">Control Pantallas</h1>
                    <div class="row">
                        <div class="col-sm-3 m-2">
                            <a href="#" class="btn btn-success btn-lg">
                                <i class="fas fa-plus"></i> Agregar Registro
                            </a>
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
                                <th scope="col">Imagen</th>
                                <th scope="col">Ver</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td><strong>{{ $producto->id }}</strong></td>
                                    <td>{{ $producto->nombre }}</td>
                                    
                                    
                                    <td> <img src="/img/pantallas/{{ $producto->imagen }}" width="20%"></td>
                                    
                                    <td>
                                        <a href="{{ route('#', $producto->id) }}" class="btn btn-success">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                    
                                    <td>
                                        <form action="{{ route('#', $producto) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-primary">
                                            <i class="far fa-paper-plane"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
</div>

@endsection
