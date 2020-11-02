<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
class PizzaController extends Controller
{
  // public function __construct(){
  //   $this->middleware('auth');
  // }


    public function index(){

      // $pizza=Pizza::all();
      $pizza=Pizza::orderBy('name')->get();
      error_log($pizza);

        
        
        return view('pizza.index',
        ['pizza'=>$pizza
        ]);
    }
    public function show($id){
      $pizza=Pizza::find($id);
      return view('pizza.show',['pizza'=>$pizza]);
    }
    public function create(){
      return view('pizza.create');
    }
    public function store(){
      $pizza=new Pizza();
      $pizza->name=request('name');
      $pizza->type=request('type');
      $pizza->base=request('base');
      $pizza->toppings= request('toppings');
      $pizza->save();
      // error_log($pizza);

      return redirect('/')->with('msg','thanks for your order');
    }
    public function destroy($id){
      $pizza=Pizza::findOrFail($id);
      $pizza->delete();
      return redirect('/pizza');
    }
   
}
