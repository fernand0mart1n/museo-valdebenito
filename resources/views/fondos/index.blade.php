@extends('base')

@section('title')
    Listado de fondos
@stop

@section('head')
    <script>
        function eliminarFondo(fondo_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta fondo?"))
                return;
            
            $.ajax({
                url: "{{ url('fondos') }}/" + fondo_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('fondos.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Fondos</li>
    </ol>
    <h1>Fondos</h1>
    <br>
    <a href="{{url('/fondos/create')}}" class="btn btn-success">Cargar fondo</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Usuario</th>
            <th>Fecha de carga</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fondos as $fondo)
            <tr>
                <td>{{ $fondo->id }}</td>
                <td>{{ $fondo->usuario_id_carga }}</td>
                <td>{{ date("d/m/Y", strtotime($fondo->fecha_carga)) }}</td>
                <td>{{ $fondo->descripcion }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('fondos', $fondo->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('fondos.edit', $fondo->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarFondo({{ $fondo->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
