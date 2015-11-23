@extends('base')

@section('title')
    Listado de usuarios
@stop

@section('head')
    <script>
        function eliminarUsuario(usuario_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta usuario?"))
                return;
            
            $.ajax({
                url: "{{ url('usuarios') }}/" + usuario_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('usuarios.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Usuarios</li>
    </ol>
    <h1>Usuarios</h1>
    <br>
    <a href="{{url('/usuarios/create')}}" class="btn btn-success">Crear Usuario</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Nombre de la persona</th>
            <th>Nombre de usuario</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->persona_id->apellido }}, {{ $usuario->persona_id->nombre }}</td>
                <td>{{ $usuario->nombre_usuario }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('usuarios', $usuario->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarUsuario({{ $usuario->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
