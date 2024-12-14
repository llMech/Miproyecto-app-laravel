@extends('layouts.app')
@section('titulo', 'registrar producto')
@section('contenido')


    <div class="rout text-center">
        <br>
        <h1>Registrar producto</h1>
        <br>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">

            <form action="{{ route('producto.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="marca" class="form-label">Marca del producto</label>
                    <input type="text" class="form-control" id="marca" name="marca">
                </div>

                <div class="mb-3">
                    <label for="precio" class="form-label">Precio del producto</label>
                    <input type="text" class="form-control" id="precio" name="precio">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion del producto</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                </div>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    <div class="col-3">
                        <a class="btn btn-warning" href="{{route('producto.index')}}">Ver Productos</a>
                    </div>
                </div>

            </form>
            </form>
        </div>
    </div>
@endsection
