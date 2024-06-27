@extends('layouts.master')

@section('title', 'Personas')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center py-5">
        <h1>Listado de personas</h1>
        <a href="{{ route('personas.create') }}" class="btn btn-primary">Crear Persona</a>
    </div>

    @if ($personas->isEmpty())
        <div class="alert alert-warning" role="alert">
            No hay personas registradas.
        </div>
    @else
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{ $persona->cPerNombre }}</td>
                        <td>{{ $persona->cPerApellido }}</td>
                        <td>{{ $persona->cPerDireccion }}</td>
                        <td>
                            @if ($persona->cPerSexo == 'M')
                                Masculino
                            @elseif ($persona->cPerSexo == 'F')
                                Femenino
                            @else
                                Otro
                            @endif
                        </td>
                        <td>{{ $persona->cPerAFecNac }}</td>
                        <td>{{ $persona->cPerEdad }}</td>
                        <td>
                            @if ($persona->cPerEstado == '1')
                                <span class="badge badge-success custom-active-badge">Activo</span>
                            @else
                                <span class="badge badge-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('personas.show', $persona->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($personas->isNotEmpty())
        <div class="d-flex justify-content-center">
            {{ $personas->links('vendor.pagination.bootstrap-4') }}
        </div>
    @endif
</div>
@endsection