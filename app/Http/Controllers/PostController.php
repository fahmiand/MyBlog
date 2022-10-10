<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{

    public function index()
    {

        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)
        ]);
    }



    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "fahmi andrian",
            "email" => "fahmiandrian070@gmail.com",
            "imag" => "fahmi.jpg"
        ]);
    }

    public function show(Post $post)
    {
        return view("post", [
            "title" => "single post",
            "post" => $post
        ]);
    }

    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }
}
