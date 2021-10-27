<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\UserView;

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
        $category = Category::where('link', 'LIKE', $name) 
        ->orWhere('name', 'LIKE', $name)->first();

        //hotels
        if($category->id == 2)
        {
            return view('categories.hotels', compact('category'));
        }
        //restourants
        else if($category->id == 3)
        {
            return view('categories.foods', compact('category'));
        }
        //medical
        else if($category->id == 7)
        {
            return view('categories.medical', compact('category'));
        }
        return 5;
        
    }
}
