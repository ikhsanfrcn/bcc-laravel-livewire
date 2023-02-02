<?php

namespace App\Http\Controllers;

use App\Models\BlogpostModel as Blogpost;
use Illuminate\Http\Request;
use App\Models\Pedia;
use Illuminate\Support\Facades\DB;

class PediaController extends Controller
{
    public function index(Request $request)
    {
        $pedia = Pedia::query();

        $pedia->when($request->post_title, function ($query) use ($request) {
            return $query->where('post_title', 'like', '%' . $request->post_title . '%');
        });

        return view('Static.coffeepedia', ['pedia' => $pedia->paginate(10)]);
    }

    public function show($post_id)
    {
        $post = DB::table('post')->where('post_id', $post_id)->first();
        return view('Static.blogpost-detail', ['post'=>$post]);
    }
}
