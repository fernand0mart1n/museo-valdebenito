@extends('base')

@section('title')
    Listado de donantes
@stop

@section('head')
    <script>
        function eliminarDonante(donante_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta donante?"))
                return;
            
            $.ajax({
                url: "{{ url('donantes') }}/" + donante_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('donantes.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Donantes</li>
    </ol>
    <h1>Donantes</h1>
    <br>
    <a href="{{url('/donantes/create')}}" class="btn btn-success">Cargar donante</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Persona</th>
            <th>Fecha de carga</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($donantes as $donante)
            <tr>
                <td>{{ $donante->id }}</td>
                <td>{{ $donante->persona_id }}</td>
                <td>{{ date("d/m/Y", strtotime($donante->fecha_carga)) }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('donantes', $donante->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('donantes.edit', $donante->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarDonante({{ $donante->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
