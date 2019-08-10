@extends("themes.$theme.layout")

@section('titulo')
    Permisos
@endsection

@section('contenido')
        
    <div class="row"></div>
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="float-right">
                            <a href="#" class="btn  bg-gradient-warning btn-sm">Agregar</a>
                    </div>
                    <h3 class="card-title">Permisos</h3>                    
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Permiso</th>
                            <th>Slug</th>
                        </tr>
                        <tbody>
                            @foreach ($permisos as $permiso)
                                <tr>
                                    <td>{{$permiso->id}}</td>
                                    <td>{{$permiso->nombre}}</td>
                                    <td>{{$permiso->slug}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>  
        </div>            
    </div>
        
@endsection

