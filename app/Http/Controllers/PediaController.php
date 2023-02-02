<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedia;

class PediaController extends Controller
{
    public function index(Request $request)
    {
        $pedia = Pedia::query();
        
       $pedia->when($request->post_title, function($query) use ($request){
        return $query->where('post_title', 'like', '%'.$request->post_title.'%');
       });
        
        return view('Static.coffeepedia', ['pedia' => $pedia->paginate(10)]);
    }
}