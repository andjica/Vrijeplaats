<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;
use Carbon\Carbon;

class MolliePaymentController extends Controller
{
    public $data = [];

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
       
        $this->data['categories'] = Category::all();
        $this->data['cities'] = City::all();

        $timenow = Carbon::now();
        $this->data['lastposts'] = Post::where('valid_until', '>', $timenow)
        ->orderBy('created_at', 'desc')->limit(3)->get();
        
    }
    public function buyticket($id)
    {
       $post = Post::find($id) ?? abort(404);

       return view('user.checkout', compact('post'), $this->data);
    }
}
