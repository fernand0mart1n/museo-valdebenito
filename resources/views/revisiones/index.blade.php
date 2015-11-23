@extends('base')

@section('title')
    Listado de revisiones
@stop

@section('head')
    <script>
        function eliminarRevision(revision_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta revisión?"))
                return;
            
            $.ajax({
                url: "{{ url('revisiones') }}/" + revision_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('revisiones.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Revisiones</li>
    </ol>
    <h1>Revisiones</h1>
    <br>
    <a href="{{url('/revisiones/create')}}" class="btn btn-success">Crear revisión</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Usuario</th>
            <th>Pieza</th>
            <th>Fecha de revisión</th>
            <th>Estado de conversación</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($revisiones as $revision)
            <tr>
                <td>{{ $revision->id }}</td>
                <td>{{ $revision->usuario_id_revision }}</td>
                <td>{{ $revision->pieza }}</td>
                <td>{{ date("d/m/Y", strtotime($revision->fecha_revision)) }}</td>
                <td>{{ $revision->estado_conversacion }}</td>
                <td>{{ $revision->ubicacion }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('revisiones', $revision->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('revisiones.edit', $revision->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarRevision({{ $revision->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
