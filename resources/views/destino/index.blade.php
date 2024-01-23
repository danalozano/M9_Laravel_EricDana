@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Destinos</h1>

        @if ($destinos->isEmpty())
            <p>No hay destinos disponibles.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destinos as $destino)
                        <tr>
                            <td>{{ $destino->id }}</td>
                            <td>{{ $destino->nombre }}</td>
                            <td>
                                <a href="{{ route('destino.show', $destino->id) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('destino.edit', $destino->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
