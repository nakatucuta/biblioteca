@extends('layouts.main')

@section('title', 'Crear Nuevo Libro')

@section('content')
    <h1 class="professional-title">Agregar un nuevo libro</h1>

  

    <!-- Formulario para crear un libro -->
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del libro</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" value="{{ old('cantidad') }}" required min="1">
        </div>

        <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>  
        </div>
    </form>
@endsection
