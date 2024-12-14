<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;

class ProductoDosController extends Controller
{
    /**
     * Listar todos los productos.
     */

    public function index()
    {
        $productos = Producto::all();
        return view('productos.gestionar', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.registro');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(request $request)
    {
        try {
            $producto = new Producto();
            $producto->nombre = $request->nombre;
            $producto->marca = $request->marca;
            $producto->precio = $request->precio;
            $producto->descripcion = $request->descripcion;
            $producto->save();

            return redirect(route('producto.create'))->with('success', 'Producto registrado con exito');
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = producto::where('id', $id)->first();
        return view(
            'productos.editar',
            compact('producto')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $producto = producto::where('id', $id)->update([
                'nombre' => $request->nombre,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'descripcion' => $request->descripcion
            ]);


            if ($producto) {
                return redirect(route('producto.index'))->with('success', 'Producto actualizado con exito');
            }

            return redirect(route('producto.index'))->with('success', 'Producto no actualizado');

        } catch (Exception $exception) {
            return $exception->getMessage();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $producto = producto::where('id', $id)->delete();

            if ($producto) {
                return redirect(route('producto.index'))->with('success', 'Producto eliminado con exito');
            }

            return redirect(route('producto.index'))->with('success', 'Producto no eliminado');


        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }
}
// if (!$producto) {
//     echo "error al eliminar producto
//      :(";
//     return $this->index();
// }
// echo "Producto eliminado con exito :)";
// return $this->index();
