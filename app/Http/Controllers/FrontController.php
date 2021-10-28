<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;

class FrontController extends Controller
{

    public $data = [];

    public function __construct()
    {
        $this->data['categories'] = Category::all();
        $this->data['cities'] = City::all();
    }
    public function index()
    {

        // $groupone = Category::
        return view('index', $this->data);
    }

    public function about()
    {
        return view('pages.about', $this->data);
    }

    public function proba()
    {
        $posts = Post::All();
        return view('pages.proba', compact('posts'));
    }

    
}
