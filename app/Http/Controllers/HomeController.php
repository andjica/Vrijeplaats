<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Category;
use App\UserView;
use App\Post;
use App\City;
use App\Purchase;

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
       
        $this->data['categories'] = Category::where('active', 'YES')->get();
        $this->data['cities'] = City::all();

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
        if(auth()->user()->role_id == 2 || auth()->user()->role_id == 3)
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
      
        
        
    }
    public function cities($name)
    {
        
        $city = City::where('name', 'LIKE',  "%{$name}%")->first();
       
       
        if($city)
        {
            
            $posts = Post::where('city_id', $city->id)
            ->orderBy('created_at', 'desc')->paginate(5);
            
            return view('categories.search-by-city', compact('city', 'posts'), $this->data);
        }
        else
        {
            return abort(404);
        }
      
        
        
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
    
    public function categorycity($name, $city)
    {
        
        $name = request()->category;
        
        $category = Category::where('name', 'LIKE',  "%{$name}%")
        ->first();
       
       
        $citysearch = request()->city;
       
        $city = City::where('name', 'LIKE', "%{$citysearch}%")
        ->first();
        
        $timenow = Carbon::now();
        $posts = Post::with('firstimage')->where('category_id', $category->id)
        ->where('city_id', $city->id)
        ->where('valid_until','>', $timenow)
        ->get();
        
        $lastpost = Post::where('category_id', $category->id)
        ->where('city_id', $city->id)
        ->where('valid_until','>', $timenow)
        ->orderBy('created_at', 'desc')
        ->first();
        
        if(request()->val)
        {
            $val = request()->val;
            return response()->json(['val'=>$val])->header("Access-Control-Allow-Origin",  "*");
        }
        if($posts->count() != 0)
        {
            $title = $category->name.' | '.$city->name;
            return view('categories.filter-category-city', compact('posts', 'city', 'category', 'lastpost', 'title'), $this->data);
        }
        else if($posts->count() == 0)
        {
            return view('errors.404', $this->data,['error' => 'Filter by category '.$name.' and city '.$city->name.' doesnt have result']);
        }
        else
        {
            return abort(404);
        }
        
    }

    public function invoices()
    {
        
        $purchases = Purchase::where('user_id', auth()->user()->id)->get();
        return view('user.invoices', compact('purchases'), $this->data);
    }

    public function invoice($idinvoice)
    {
       
        $purchase = Purchase::where('inv_id', 'LIKE',  "%{$idinvoice}%")
        ->first();
        
        $p = $purchase->user->userview->address;
        
        return view('user.invoice', compact('purchase'), $this->data);
    }

    public function categorylocation()
    {
        $latitude = request()->latitude;
        $longitude = request()->longlatitude;

        $category = Category::find(request()->categoryId) ?? abort (404);
        $timenow = Carbon::now();
        
        if($latitude && $longitude)
        {
            
            $postsa = DB::table("cities")
            ->join('posts', 'cities.id', '=', 'posts.city_id')
            ->select(DB::raw("cities.id, 
            ( 3959 * acos( cos( radians('$latitude') ) 
            * cos( radians( geo_latitude ) ) * cos( radians( geo_long_latitude ) 
            - radians('$longitude') ) + sin( radians('$latitude') ) * 
            sin( radians( geo_latitude  ) ) ) ) AS distance"), 'posts.*')
            ->where('posts.category_id', $category->id)
            ->where('posts.valid_until', '>', $timenow)
            ->havingRaw('distance < 50')->orderBy('distance')
            ->get();  
        
           
          
            
            if($postsa->count() == 0)
            {
                return view('errors.404', $this->data,['error' => '
                Er zijn momenteel geen categorieën bij jou in de buurt geselecteerd']);
            }
            else
            {   
                $cityId =  $postsa[0]->city_id;
                $city = City::find($cityId);
    
                $title = $category->name.' | '.$city->name;
                return view('categories.index', compact('postsa','category', 'city', 'latitude', 'longitude', 'title'), $this->data);
            }
        }
        else
        {
            $postsa = Post::where('category_id', $category->id)
            ->where('valid_until', '>', $timenow)
            ->get();
            
            $title = $category->name;

            return view('categories.index', compact('postsa','category', 'city', 'latitude', 'longitude', 'title'), $this->data);
        }
       
    }
}
