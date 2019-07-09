<?php

namespace App\Http\Controllers;

use App\productomodel;
use Illuminate\Http\Request;
use Session;
class productocontroler extends Controller
{
    
  public function index(){
   
   $productos=productomodel::paginate(3);
   // ORDENAR POR ID DE FORMA DESCENDENTE$productos=productomodel::orderBy('id','DESC')->paginate(3);
   //trae solo 3 registros 
 // $productos=productomodel::paginate(3);
  //  trae todos loa datos de la tabla $productos=productomodel::all();
  
   // dd($producto1) verifica la traida de datos;
   // return;
    return view('productos.index',compact('productos'));
   //return view('productos.index')->with('productos',$productos);
   }

public function create()
{
     
      return view('productos.create');
}


public function store(Request $request)
{
       $request->validate([
       	'nombre'=>'required',
        'precio'=>'required',
        'cantidad'=>'required',
        ]);

       productomodel::create($request->all());

       Session::flash('message','producto ingresado correctamente');
       return redirect()->route('productos.index');
}




}
