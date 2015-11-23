@extends('base')

@section('title')
    Listado de donaciones
@stop

@section('head')
    <script>
        function eliminarDonacion(donacion_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta donación?"))
                return;
            
            $.ajax({
                url: "{{ url('donaciones') }}/" + donacion_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('donaciones.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Donaciones</li>
    </ol>
    <h1>Donaciones</h1>
    <br>
    <a href="{{url('/donaciones/create')}}" class="btn btn-success">Cargar donación</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Donante</th>
            <th>Pieza</th>
            <th>Fecha de donación</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($donaciones as $donacion)
            <tr>
                <td>{{ $donacion->id }}</td>
                <td>{{ $donacion->donante_id }}</td>
                <td>{{ $donacion->pieza }}</td>
                <td>{{ date("d/m/Y", strtotime($donacion->fecha_donacion)) }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('donaciones', $donacion->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('donaciones.edit', $donacion->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarPersona({{ $donacion->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
