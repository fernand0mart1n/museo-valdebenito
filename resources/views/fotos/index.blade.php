@extends('base')

@section('title')
    Lista de fotos
@stop

@section('head')
    <script>
        function eliminarFoto(foto_id){
            
            if(!confirm("¿Está seguro que desea eliminar esta foto?"))
                return;
            
            $.ajax({
                url: "{{ url('fotos') }}/" + foto_id,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    _method: 'DELETE'
                },
                success: function(response) {
                    window.location.href = "{{ route('fotos.index') }}";
                }
            });
        }
    </script>
@stop

@section('content')
<div class="col-md-10 col-md-offset-1">
    <ol class="breadcrumb">
        <li><a href="{{ route('bienvenido.index') }}">Inicio</a></li>
        <li class="active">Fotos</li>
    </ol>
    <h1>Fotos</h1>
    <br>
    <a href="{{url('/fotos/create')}}" class="btn btn-success">Subir una foto</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Pieza</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fotos as $foto)
            <tr>
                <td>{{ $foto->id }}</td>
                <td>{{ $foto->pieza }}</td>
                <td>{{ $foto->foto }}</td>
                <td>
                    <div class="btn btn-group btn-block">
                        <a href="{{url('fotos', $foto->id)}}" class="btn btn-info" title="Ver"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{route('fotos.edit', $foto->id)}}" class="btn btn-warning" title="Editar"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-danger" title="Eliminar" onclick="eliminarFoto({{ $foto->id }})"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
