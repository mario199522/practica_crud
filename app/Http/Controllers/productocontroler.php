<?php

namespace App\Http\Controllers;

use App\productomodel;
use Illuminate\Http\Request;

class productocontroler extends Controller
{
    
  public function index(){
   
   

  
   $productos=productomodel::all();
   // dd($producto1);
   // return;
    return view('productos.index',compact('productos'));
   //return view('productos.index')->with('productos',$productos);




   }








}
