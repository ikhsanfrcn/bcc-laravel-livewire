<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BlogpostModel as Blogpost;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display All data from Database
        $blogpost = DB::table('post')->get();
        return view('Admin.blogpost', ['blogpost' => $blogpost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store Record to the Table
        $request->validate([
            'post_title' => 'required',
            'post_meta_keyword' => 'required',
            'post_meta_description' => 'required',
            'post_image',
            'post_content' => 'required',
        ]);
        Blogpost::create($request->all());
        return redirect()->route('blogpost.index')->with('success', 'Blogpost Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $model = Blogpost::find($post_id);
        return view('Static.blogpost-detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogpost $blogpost)
    {
        Blogpost::destroy($blogpost->post_id);
        return redirect()->route('blogpost.index')->with('success', 'Blogpost Deleted Successfully!');
    }
}
