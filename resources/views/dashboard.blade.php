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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->name }}</td>
                <td>{{ $libro->cantidad }}</td>
                <td>   
                    
                    <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning btn-sm">
                    Editar
                </a>


                 <!-- Botón para eliminar el libro -->
                 <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este libro?')">
                        Eliminar
                    </button>
                </form>
             </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

