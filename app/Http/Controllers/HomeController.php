<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\UserView;
use App\Post;
use App\City;
use Carbon\Carbon;

class HomeController extends Controller
{

    private $data = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
       
        $this->data['categories'] = Category::all();

        $timenow = Carbon::now();
        $this->data['lastposts'] = Post::where('valid_until', '>', $timenow)
        ->orderBy('created_at', 'desc')->limit(3)->get();
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $userId = auth()->user()->id;
        if(auth()->user()->role_id == 2)
        {
            $user = UserView::where('user_id', $userId)->first();
            if(!$user)
            {
                //go to edit user profile first and than surf
                return redirect('/bewerk-profiel');
            }
            return view('user.home', $this->data);
        }
        else
        {
            return redirect('/admin-home');
        }
        
    }

   
    public function addadv()
    {
        return view('user.add-adv', $this->data);
    }

    

    public function categories($name)
    {
        
        $category = Category::where('link', 'LIKE',  "%{$name}%")->first();
       
       
        if($category)
        {
            
            $posts = Post::where('category_id', $category->id)
            ->orderBy('created_at', 'desc')->paginate(5);
            
            return view('categories.index', compact('category', 'posts'), $this->data);
        }
        else
        {
            return abort(404);
        }
      
        return 5;
        
    }

    public function getpost($name, $city, $title)
    {

        $category = Category::where('link', 'LIKE',  "%{$name}%")
        ->first();
       
        $city = City::where('name', 'LIKE', "%{$city}%")
        ->first();
       
        $post = Post::where('title', 'LIKE',  "%{$title}%")
        ->where('category_id', $category->id)->first();

        $timenow = Carbon::now();
        $randomactiveposts = Post::where('category_id', $category->id)
        ->where('valid_until', '>', $timenow)
        ->limit(3)->inRandomOrder()->get();
        
        if($post)
        {
            return view('categories.getpost', compact('post', 'category', 'city', 'randomactiveposts'), $this->data);

        }
        else
        {
            return abort(404);
        }
    }

    public function getallposts()
    {
        $timenow = Carbon::now();
        
        $posts = Post::where('valid_until', '>', $timenow)
        ->orderBy('created_at', 'desc')->paginate(6);
        
        return view('categories.posts', compact('posts'), $this->data);
    }
}
