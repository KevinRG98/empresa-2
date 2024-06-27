@extends('layouts.master')

@section('title', 'Editar Persona')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Editar Persona</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personas.update', ['id' => $persona->id]) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="nPerCodigo">Código</label>
            <input type="number" class="form-control" id="nPerCodigo" name="nPerCodigo" value="{{ old('nPerCodigo', $persona->nPerCodigo) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerApellido">Apellido</label>
            <input type="text" class="form-control" id="cPerApellido" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerNombre">Nombre</label>
            <input type="text" class="form-control" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerDireccion">Dirección</label>
            <input type="text" class="form-control" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerAFecNac">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="cPerAFecNac" name="cPerAFecNac" value="{{ old('cPerAFecNac', $persona->cPerAFecNac) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerEdad">Edad</label>
            <input type="number" class="form-control" id="cPerEdad" name="cPerEdad" value="{{ old('cPerEdad', $persona->cPerEdad) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerSexo">Sexo</label>
            <select class="form-control" id="cPerSexo" name="cPerSexo" required>
                <option value="M" {{ old('cPerSexo', $persona->cPerSexo) == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ old('cPerSexo', $persona->cPerSexo) == 'F' ? 'selected' : '' }}>Femenino</option>
                <option value="O" {{ old('cPerSexo', $persona->cPerSexo) == 'O' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cPerSueldo">Sueldo</label>
            <input type="number" step="0.01" class="form-control" id="cPerSueldo" name="cPerSueldo" value="{{ old('cPerSueldo', $persona->cPerSueldo) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerRnd">Rnd</label>
            <input type="text" class="form-control" id="cPerRnd" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}" required>
        </div>

        <div class="form-group">
            <label for="cPerEstado">Estado</label>
            <select class="form-control" id="cPerEstado" name="cPerEstado" required>
                <option value="1" {{ old('cPerEstado', $persona->cPerEstado) == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('cPerEstado', $persona->cPerEstado) == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection