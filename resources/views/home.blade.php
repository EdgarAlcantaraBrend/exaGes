    @extends('layouts.main', [
        'namePage' => 'Dashboard',
        'class' => 'login-page sidebar-mini ',
        'activePage' => 'home',
        'backgroundImage' => asset('now') . "/img/bg14.jpg",
    ])

    @section('content')
    <div class="panel-header panel-header-lg">
        
    </div>
    <div class="content" >
        <div class="container">
            <div class="row m-2">
                <div class="col-sm-1"></div>
                <div id="crear" class="col-sm-10 m-3" style="background:#6c82af; border-radius:15px;">
                    <h1 class="display-6 text-center" style="color:whitesmoke">
                        <strong>GESTOR DE ARCHIVOS</strong>
                    </h1>
                    <form class="text-center m-1" action="{{ route('archivos.store')}}" method="post"
                        enctype="multipart/form-data">

                        @csrf

                        <p>
                            <label for="nombre" style="color:white">Nombre del archivo</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </p>
                        <br>
                        <p>
                            <label for="archivo" style="color:white">Archivo</label>
                            <input type="file" name="archivo" id="archivo" class="form-control"  style="background-color: #6c82af" required>
                        </p>
                        
                        <br>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-cloud-upload-alt"></i>
                                    Subir</button>
                            </div>
                            <div class="col-sm-4"></div>                            
                        </div>
                    </form>
                    <br>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    @endsection

  