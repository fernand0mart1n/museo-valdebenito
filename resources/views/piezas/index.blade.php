@extends('base')

@section('title')
    Listado de piezas
@stop

@section('head')
    <script>
        function eliminarPieza(pieza_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta pieza?"))
                return;
            
            $.ajax({
                url: "{{ url('piezas') }}/" + pieza_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('piezas.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Piezas</li>
    </ol>
    <h1>Piezas</h1>
    <br>
    <a href="{{url('/piezas/create')}}" class="btn btn-success">Crear Pieza</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Clasificación</th>
            <th>Descripción</th>
            <th>Procedencia</th>
            <th>Autor</th>
            <th>Fecha de ejecutación</th>
            <th>Tema</th>
            <th>Observación</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($piezas as $pieza)
            <tr>
                <td>{{ $pieza->id }}</td>
                <td>{{ $pieza->clasificacion }}</td>
                <td>{{ $pieza->descripcion }}</td>
                <td>{{ $pieza->procedencia }}</td>
                <td>{{ $pieza->autor }}</td>
                <td>{{ $pieza->fecha_ejecutacion }}</td>
                <td>{{ $pieza->tema }}</td>
                <td>{{ $pieza->observacion }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('piezas', $pieza->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('piezas.edit', $pieza->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarPieza({{ $pieza->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
