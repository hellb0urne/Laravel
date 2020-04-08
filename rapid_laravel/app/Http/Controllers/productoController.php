<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Muestra todos los productos del a base de datos
    public function index() {
        $productos = \App\Producto::all(); //Select * from producto

        return view("producto.index", compact("productos")); //<-- enviamos ese arreglo completo a la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {


        return view("producto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $producto = new \App\Producto;
        $producto->nombre_producto = $request->input("nombre"); //Recibir el nombre desde el formulario y lo guardmaos en el 
        //objeto de producto que se creo
        $producto->save(); //Insert into en la tabla producto
        //Se almacena en la base de datos
        //return redirect()->route("producto.index"); //Lo enviamos a la tabla producto
        return back()->with("msg", "Producto creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $producto = \App\Producto::findOrFail($id); //Buscamos el producto
        return view("producto.show", compact("producto")); //Retornamos el producto
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $producto = \App\Producto::findOrFail($id);
        return view("producto.edit", compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $producto = \App\Producto::findOrFail($id);
        $producto->nombre_producto = $request->input("nombre");
        $producto->update();
        return redirect()->route("producto.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $producto = \App\Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route("producto.index");
    }

}
