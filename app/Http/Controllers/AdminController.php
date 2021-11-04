<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;


class AdminController extends Controller
{
    public function __construct()
    {
     
        $this->data['categories'] = Category::all();
    }
    public function index()
    {
        $posts = Post::all();
        $countposts = Post::where('count_of_ticket', '>', 0)->count();
        
        $users = User::All();
        $countusers = User::count();

        return view('admin.index', compact('posts', 'countposts', 'users', 'countusers'), $this->data);
    }
}
