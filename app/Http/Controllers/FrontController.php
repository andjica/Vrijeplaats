<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;
use Carbon\Carbon;

class FrontController extends Controller
{

    public $data = [];

    public function __construct()
    {
        $this->data['categories'] = Category::all();
        $this->data['cities'] = City::all();

        $timenow = Carbon::now();
        $this->data['randomposts'] = Post::where('valid_until', '>', $timenow)
        ->inRandomOrder()->first();
    }
    public function index()
    {

        $timenow = Carbon::now();
        
        $posts = Post::where('valid_until', '>', $timenow)
        ->inRandomOrder()->limit(3)->get();

        $lastposts = Post::where('valid_until', '>', $timenow)
        ->orderBy('created_at', 'desc')->limit(3)->get();

        return view('index', compact('posts', 'lastposts'), $this->data);
    }

    public function about()
    {
        return view('pages.about', $this->data);
    }

   

    public function contact()
    {
        
        return view('pages.contact', $this->data);
    }

    public function partner()
    {
        return view('pages.become-partner', $this->data);
    }

    public function proba()
    {
        return view('pages.proba', $this->data);
    }

    
}
