@extends('layouts.app')
@section('titulo', 'editar producto')
@section('contenido')


    <div class="rout text-center">
        <h1>Editar producto</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">

            <form action="{{ route('producto.update', ['id' => $producto->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}">
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca del producto</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $producto->marca }}">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio del producto</label>
                    <input type="text" class="form-control" id="precio" name="precio"
                        value="{{ $producto->precio }}">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion del producto</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion"
                        value="{{ $producto->descripcion }}">
                </div>

                <div class="row justify-content-between">
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                        <div class="col-3">
                            <a class="btn btn-warning" href="{{ route('producto.index') }}">Ver Productos</a>
                        </div>
                </div>
            </form>
        </div>
    </div>
@endsection
