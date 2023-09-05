<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all()->reverse();
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $post = new Post();
       $post->title = $request->title;
       $post->description = $request->description;
       $post->tags = $request->tags;
       $post->meta_keywords = $request->meta_keywords;
       $post->meta_description = $request->meta_description;
       uploadFile($request,$post,"image");
       $post->save();
       $post->categories()->attach($request->category_id);
       return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('backend.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
       $post->title = $request->title;
       $post->description = $request->description;
       $post->tags = $request->tags;
       $post->meta_keywords = $request->meta_keywords;
       $post->meta_description = $request->meta_description;
       uploadFile($request,$post,"image");
       $post->update();
       $post->categories()->sync($request->category_id);
       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
