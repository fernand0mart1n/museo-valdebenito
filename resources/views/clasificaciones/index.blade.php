@extends('base')

@section('title')
    Lista de clasificaciones
@stop

@section('head')
    <script>
        function eliminarClasificacion(clasificacion_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta clasificación?"))
                return;
            
            $.ajax({
                url: "{{ url('clasificaciones') }}/" + clasificacion_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('clasificaciones.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Clasificaciones</li>
    </ol>
    <h1>Clasificaciones</h1>
    <br>
    <a href="{{url('/clasificaciones/create')}}" class="btn btn-success">Crear clasificación</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Fondo</th>
            <th>Usuario</th>
            <th>Fecha de carga</th>
            <th>Descripción</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clasificaciones as $clasificacion)
            <tr>
                <td>{{ $clasificacion->id }}</td>
                <td>{{ $clasificacion->fondo_id }}</td>
                <td>{{ $clasificacion->usuario_id_carga->nombre_usuario }}</td>
                <td>{{ $clasificacion->descripcion }}</td>
                <td>{{ date("d/m/Y", strtotime($clasificacion->fecha_carga)) }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('clasificaciones', $clasificacion->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('clasificaciones.edit', $clasificacion->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarClasificacion({{ $clasificacion->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
