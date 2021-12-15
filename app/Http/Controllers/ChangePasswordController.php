<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Crypt;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Category;
use App\City;
use App\Post;
use Carbon\Carbon;

class ChangePasswordController extends Controller
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
    
    public function index()
    {

        return view('user.change-password', $this->data);
    }

    public function store(Request $request)
    {
     
        $request->validate([
            'currentpassword' => ['required', new MatchOldPassword],
            'newpassword' => ['required'],
            'newconfirmpassword' => ['same:newpassword'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->newpassword)]);
   
        return redirect()->back()->with('success', 'U heeft het wachtwoord met succes gewijzigd');
    }
}
