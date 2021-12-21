<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;
use App\User;
use App\Purchase;
use App\UserSignature;
use App\UserView;

use Carbon;

class AdminController extends Controller
{
    public $data = [];
    public function __construct()
    {
     
        $this->data['categories'] = Category::all();
        $this->data['cities'] = City::all();
        $this->data['countposts'] =  Post::where('count_of_ticket', '>', 0)->count();
    }
    public function index()
    {
        $posts = Post::all();
       
        $expiredposts = Post::where('count_of_ticket', '==', 0)->count();
        
        $users = User::All();
        $countusers = User::count();

        $hotels = Post::where('category_id', 2)->first();
        $counthotels = Post::where('category_id', 2)->count();
        
        $countcategories = Category::count();

        $limitpurchases = Purchase::orderBy('created_at', 'desc')->limit(3)->get();
        
        $countpurchases = Purchase::where('role_payment', 'coupons')->count();
       
        $newpartners = UserView::where('payed_status', 0)->where('company', 'Company')->count();
        

        return view('admin.index', compact('posts', 'users', 'countpurchases','newpartners',
        'countusers', 'hotels', 'counthotels', 'expiredposts', 'countcategories', 'limitpurchases'), $this->data);
    }

    public function invoices()
    {
        $purchases = Purchase::orderBy('created_at', 'desc')->where('role_payment', 'Account activatie')->get();
        return view('admin.invoices', compact('purchases'), $this->data);
    }

    public function couponinvoices()
    {
        $purchases = Purchase::orderBy('created_at', 'desc')->where('role_payment', 'coupons')->get();
        return view('admin.invoices-coupons', compact('purchases'), $this->data);
    }

    public function invoice($idinvoice)
    {
        $purchase = Purchase::where('inv_id', 'LIKE',  "%{$idinvoice}%")
        ->first();
        
        $p = $purchase->user->userview->address;
        
        return view('admin.invoice', compact('purchase'), $this->data);
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        
        $datenow =  Carbon\Carbon::now();
        $postsexpired = Post::where('valid_until', '<', $datenow)->get();
        
        return view('admin.posts', compact('posts', 'postsexpired'), $this->data);
    }

    public function partners()
    {
        $partners = UserView::where('company', 'Company')->orderBy('created_at', 'desc')->get();
        $noactive = UserView::where('payed_status', 0)
        ->where('company', 'Company')
        ->get();
        
        return view('admin.partners', compact('partners', 'noactive'), $this->data);
    }

    public function users()
    {
        $users = User::where('role_id', '!=', 1)->orderBy('created_at', 'desc')->get();

        return view('admin.user.users', compact('users'), $this->data);
    }

    public function onlyusers()
    {
        $users = User::where('role_id', 2)->orderBy('created_at', 'desc')->get();

        return view('admin.user.only-users',compact('users'), $this->data);
    }
    public function onlycompanies()
    {
        $users = User::where('role_id', 3)->orderBy('created_at', 'desc')->get();

        return view('admin.user.only-users',compact('users'), $this->data);
    }


    public function userinvoices($id)
    {
        $user = User::find($id);
        $invoices =  $user->purchases;
        
        return view('admin.user.role-invoices', compact('invoices', 'user'), $this->data);
    }

    public function deleteuser($id)
    {
        $userview = UserView::find($id);
        $useremail = $userview->email;

        $user = User::where('email', $useremail)->first();
        
        if($user == null)
        {
            $userview->delete();
            return redirect()->back()->with('success', 'Je hebt de gebruiker succesvol verwijderd');
        }
        else
        {
            $userview->delete();
            $user->delete();
            //mora se nadju postovi i da se uklone
            return redirect()->back()->with('success', 'Je hebt de gebruiker succesvol verwijderd');
        }
    }
}
