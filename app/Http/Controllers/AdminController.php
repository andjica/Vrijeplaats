<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use App\Purchase;


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
        $expiredposts = Post::where('count_of_ticket', '==', 0)->count();
        
        $users = User::All();
        $countusers = User::count();

        $hotels = Post::where('category_id', 2)->first();
        $counthotels = Post::where('category_id', 2)->count();
        
        $countcategories = Category::count();

        $limitpurchases = Purchase::orderBy('created_at', 'desc')->limit(3)->get();
        

        return view('admin.index', compact('posts', 'countposts', 'users', 
        'countusers', 'hotels', 'counthotels', 'expiredposts', 'countcategories', 'limitpurchases'), $this->data);
    }

    public function invoices()
    {
        $purchases = Purchase::orderBy('created_at', 'desc')->get();
        return view('admin.invoices', compact('purchases'), $this->data);
    }
}
