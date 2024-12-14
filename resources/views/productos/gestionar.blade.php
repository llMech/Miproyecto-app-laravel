@extends('layouts.app')
@section('titulo', 'gestionar productos')
@section('contenido')


    <div class="rout text-center">
        <br>
        <h1>PRODUCTOS</h1>
    </div>
    <br>

    <div class="row justify-content-end">
        <div class="col-2">
            <a class="btn btn-light" href="{{ route('producto.create') }}">Registrar producto</a>
        </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-18">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>N° </th>
                        <th>Nombre </th>
                        <th>Marca </th>
                        <th>Descripción </th>
                        <th>Precio </th>
                        <th>Acciones </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $p)
                        <tr class="table-dark">
                            <td>{{ /* $p->id */ $loop->iteration }}</td>
                            <td>{{ $p->nombre }}</td>
                            <td>{{ $p->marca }}</td>
                            <td>{{ $p->descripcion }}</td>
                            <td>{{ $p->precio }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn btn-primary"
                                            href="{{ route('producto.edit', ['id' => $p->id]) }}">Editar</a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{ route('producto.destroy', ['id' => $p->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('¿Seguro que desea eliminar el registro?')">Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
