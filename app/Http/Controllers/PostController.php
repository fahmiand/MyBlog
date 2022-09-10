<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Livewire\WithPagination;

class PostController extends Controller
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function index()
    {

        // $title = '';
        // if (request('category')) {
        //     $category = Category::fristWhere('slug', request('category'));
        //     $title = ' in ' . $category->name;
        // }

        // if (request('user')) {
        //     $author = User::fristWhere('username', request('user'));
        //     $title = ' in ' . $author->name;
        // }

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

    // public function category(Category $category)
    // {
    //     return view('posts', [
    //         'title' => "Post by Category : $category->name",
    //         "active" => "categories",
    //         'posts' => $category->posts->load('category', 'user')
    //     ]);
    // }

    public function categories()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    // public function authors(User $author)
    // {
    //     return view('posts', [
    //         'title' => "Post by Author : $author->name",
    //         'active' => 'posts',
    //         'posts' => $author->posts->load('category', 'user')
    //     ]);
    // }
}
