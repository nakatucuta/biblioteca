@extends('layouts.main')

@section('title', 'Lista de Libros')

@section('content')
    <!-- Botón estilo Bootstrap -->
    <div class="mb-4">
        <a href="{{ route('libros.create') }}">
            <button type="button" class="btn btn-primary">
                Agregar nuevo libro
            </button>
        </a>
    </div>

    <!-- Tabla mejorada con DataTables -->
    <table id="librosTable" class="table table-striped table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del libro</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->name }}</td>
                <td>{{ $libro->cantidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

