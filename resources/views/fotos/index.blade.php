@extends('base')

@section('title')
    Listado de personas
@stop

@section('head')
    <script>
        function eliminarPersona(persona_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta persona?"))
                return;
            
            $.ajax({
                url: "{{ url('personas') }}/" + persona_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('personas.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Personas</li>
    </ol>
    <h1>Personas</h1>
    <br>
    <a href="{{url('/personas/create')}}" class="btn btn-success">Crear Persona</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cuit/Cuil</th>
            <th>Domicilio</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Fecha de carga</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->id }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->apellido }}</td>
                <td>{{ $persona->cuit_cuil }}</td>
                <td>{{ $persona->domicilio }}</td>
                <td>{{ $persona->telefono }}</td>
                <td>{{ $persona->email }}</td>
                <td>{{ date("d/m/Y", strtotime($persona->fecha_carga)) }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('personas', $persona->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('personas.edit', $persona->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarPersona({{ $persona->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
