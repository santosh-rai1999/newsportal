<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    function home()
    {
        // $menus = Category::all();
        $posts = Post::all()->reverse();
        $categories = Category::with('posts')->get();
        return view('frontend.index',compact('posts','categories'));

    }

    function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts;
        // return $posts;
        return view('frontend.category',compact('posts'));
    }

    function post($id)
    {
        $post = Post::find($id);
        $post->increment('views');
        $comments = Comment::orderBy('created_at','desc')->where('post_id',$id)->paginate(2);
        return view('frontend.post',compact('post','comments'));
    }
    function comment(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "comment"=>"required",
            "captcha"=>"required|captcha",
        ]);
        // return $request;
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect()->back();

    }
    function loadCaptcha()
    {
        $captcha = captcha_img('math');
        return response()->json(['captcha' => $captcha]);
    }
}
