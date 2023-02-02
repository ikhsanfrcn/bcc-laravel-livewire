<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function index(Request $request)
    {
        $coffees = Coffee::query();
        
       $coffees->when($request->coffee_name, function($query) use ($request){
        return $query->where('coffee_name', 'like', '%'.$request->coffee_name.'%');
       });
       
       $coffees->when($request->coffee_type_id, function($query) use ($request){
           return $query->whereCoffee_type_id($request->coffee_type_id);
        });

        
        return view('Static.coffee', ['coffees' => $coffees->paginate(10)]);
    }
}