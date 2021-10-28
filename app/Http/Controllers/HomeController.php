<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\UserView;
use App\Post;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $userId = auth()->user()->id;
        $user = UserView::where('user_id', $userId)->first();
        if(!$user)
        {
            //go to edit user profile first and than surf
            return redirect('bewerk-profiel');
        }
        return view('user.home', $this->data);
    }

   
    public function addadv()
    {
        return view('user.add-adv', $this->data);
    }

    

    public function categories($name)
    {
        
        $category = Category::where('link', 'LIKE',  "%{$name}%")->first();
       
        //hotels
        if($category->id == 2)
        {
            $posts = Post::where('category_id', $category->id)
            ->orderBy('created_at', 'desc')->get();
            
            return view('categories.hotels', compact('category', 'posts'));
        }
        //restourants
        else if($category->id == 3)
        {
            return view('categories.foods', compact('category'));
        }
        //medical
        else if($category->id == 4)
        {
            return view('categories.medical', compact('category'));
        }
        return 5;
        
    }
}
