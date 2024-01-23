@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nuevo Destino</h1>

        <form action="{{ route('destino.store') }}" method="post">
            @csrf
            @include('destino._form')
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
