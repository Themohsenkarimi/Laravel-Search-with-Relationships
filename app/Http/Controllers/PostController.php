<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts =Post::all();
        return view('index',compact('posts'));
    }

    public function search(Request $request){

        $search = $request->search;

        $posts =Post::where(function($query) use ($search){

            $query->where('title','like',"%$search%")
            ->orWhere('description','like',"%$search%");

            })
            ->orWhereHas('category',function($query) use($search){
                $query->where('name','like',"%$search%");
            })
            ->orWhereHas('user',function($query) use ($search){
                $query->where('name','like',"%$search%");
            })
            ->get();
            
            return view('index',compact('posts','search'));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
