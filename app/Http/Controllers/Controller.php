<?php

namespace App\Http\Controllers;

use App\Exports\ExportName;
use App\Models\Cliente;
use App\Models\Producto;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use mysql_xdevapi\Exception;

use Termwind\Components\Li;


class Controller extends BaseController
{

    function home()
    {

        $items = Producto::all();
        return view('home', compact('items'));
    }

    function clientes()
    {
        $items = Cliente::all();
        return view('clientes',compact('items'));
    }





    function productos()
    {

        $items = Producto::orderBy('nombre', 'asc')->paginate(5);
        return view('productos', compact('items','items'));

    }



    function add()
    {

        return view('add');
    }

    function addC()
    {

        return view('addC');
    }


    function store(Request $request)
    {
        try{
            $producto = new Producto();
            $producto->id = $request->input('id');
            $producto->nombre = $request->input('nombre');
            $producto->descripcion = $request->input('descripcion');


            if($request->hasFile('img'))
            {
                $file=$request->file('img');
                $extention=$file->getClientOriginalExtension();
                $filename= time().'.'.$extention;
                $file->move('images',$filename);
                $producto->img=$filename;
            }
            else if ($producto->img == null){
                $producto->img="gym.jpg";
            }


            $producto->save();


        }
        catch (\Exception $exception){
            return redirect()->route("productos")->with("title","Error: Ha creado un producto con el mismo codigo, este debe ser unico");
        }
        return redirect()->route("productos")->with("success", "Agregado con exito!");

    }


    function storeC(Request $request)
    {
        try{
            $cliente = new Cliente();
            $cliente->nombre = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->email = $request->email;
            $cliente->telefono = $request->telefono;
            $cliente->fecha_nacimiento = $request->fecha_nacimiento;
            $cliente->genero = $request->genero;
            $cliente->membresia_id = $request->membresia_id;
            $cliente->save();


        }
        catch (\Exception $exception){
            return redirect()->route("clientes")->with("title","Error: Ha agregado un cliente con el mismo codigo, este debe ser unico");
        }
        return redirect()->route("clientes")->with("success", "Agregado con exito!");

    }


    public function delete($id)
    {
        $productos = Producto::find($id);
        $productos ->delete();
        return redirect()->route("productos")->with("success","Eliminado con exito!");

    }


    public function destroy($id)
    {
        // Intentamos encontrar el cliente por su ID
        $cliente = Cliente::find($id);

        // Si el cliente no existe, redirigimos con un mensaje de error
        if (!$cliente) {
            return redirect()->route("clientes")->with("error", "Cliente no encontrado.");
        }

        // Si el cliente existe, lo eliminamos
        $cliente->delete();

        // Redirigimos con un mensaje de éxito
        return redirect()->route("clientes")->with("success", "Cliente eliminado con éxito!");
    }




    public function edit($id){

        $item = Producto::find($id);

        return view('edit', compact('item'));
    }


    public function modificarCliente($id){

        $cliente = Cliente::find($id);

        return view('modificarCliente', compact('cliente'));
    }



    function update(Request $request, $id)
    {
        $item = Producto::find($id);
        $item->nombre = $request->post('nombre');
        $item->descripcion = $request->post('descripcion');

        $item->save();
        return redirect()->route("productos")->with("success", "Editado con exito!");

    }


    function actualizarCliente(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->post('nombre');
        $cliente->apellido = $request->post('apellido');
        $cliente->email = $request->post('email');
        $cliente->telefono = $request->post('telefono');
        $cliente->fecha_nacimiento = $request->post('fecha_nacimiento');

        $cliente->save();

        return redirect()->route("clientes")->with("success", "Editado con exito!");

    }








}
