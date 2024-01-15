<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;

class rutasController extends Controller
{
    function home(){
        $productos = Product::all();
        return view('home')->with('productos', $productos);
    }

    public function create()
    {
        return view("create");
    }

    public function order()
    {
        $productos = Product::where('precio')
                                    ->orderBy('precio', 'desc')
                                    ->get();
        //return view('home', compact('productos'));
        var_dump($productos);
    }

    function store(Request $request)
    {
        $productos = new Producto();
        
            $productos->id=$request->get('id');
            $productos->nombre=$request->get('nombre');
            $productos->categoria=$request->get('categoria');
            $productos->precio=$request->get('precio');
            $productos->descripcion=$request->get('descripcion');
            
            $productos->save();

            return redirect('home');
    }

    function details($id){
        $producto = Product::find($id);
        return view('details')->with('producto', $producto);
    }

    function update(Request $request, $id){
        $producto = Producto::find($id);

        $producto->id = $request->get('id');
        $producto->nombre = $request->get('nombre');
        $producto->categoria = $request->get('categoria');
        $producto->precio = $request->get('precio');
        $producto->descripcion = $request->get('descripcion');

        $articulo->save();

        return redirect('/details/{$id}');

    }

    function contact(){
        return view('contact');
    }

    function offers(){
        return view('offers');
    }
}
?>