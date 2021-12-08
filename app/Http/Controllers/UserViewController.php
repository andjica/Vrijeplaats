<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailBecomePartner;
use App\Mail\EmailConfirmationBecomePartner;
use App\Mail\ConfirmationCompany;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UserView;
use App\Category;
use App\City;
use App\Post;
use Carbon\Carbon;
use App\Purchase;


class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.bewerkprofiel', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $userinfo = new UserView();
        $userinfo->firstname = request()->firstname;
        $userinfo->lastname = request()->lastname;
        $userinfo->company = request()->usercategory;
        $userinfo->phone = request()->phone;
        $userinfo->bio = request()->bio;
        $userinfo->linkedin = request()->linkedin;
        $userinfo->facebook = request()->facebook;
        $userinfo->instagram = request()->instagram;
        $userinfo->user_id = auth()->user()->id;
        $userinfo->address = request()->autocompleteaddress;

        if(request()->userimage)
        {
            
            $current = time();
            $image = request()->file('userimage');
            $name = $current.str_slug(request()->firstname.request()->lastname.auth()->user()->id).'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images/users');

            $image->move($destinationPath, $name);

            $userinfo->image = $name;
            try{
                $userinfo->save();
                return redirect()->back()->with('success', 'Je hebt je gegevens succesvol uitgewisseld');
            }
            catch(\Throwable $e)
            {
                abort(500);
            }
        }
        else
        {
            try{
                $userinfo->save();
                return redirect()->back()->with('success', 'Je hebt je gegevens succesvol uitgewisseld');

            }
            catch(\Throwable $e)
            {
                abort(500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
        $userinfo = UserView::where('user_id',auth()->user()->id)->first();
        $userinfo->firstname = request()->firstname2;
        $userinfo->lastname = request()->lastname2;
        $userinfo->company = request()->usercategory2;
        $userinfo->company_name = request()->companyname;
        $userinfo->company_kvk = request()->companykvk;
        $userinfo->company_btw = request()->companybtw;
        $userinfo->phone = request()->phone2;
        $userinfo->bio = request()->bio2;
        $userinfo->linkedin = request()->linkedin2;
        $userinfo->facebook = request()->facebook2;
        $userinfo->instagram = request()->instagram2;
        $userinfo->user_id = auth()->user()->id;
        $userinfo->address = request()->autocompleteaddress;
        $userinfo->post_code = request()->postcode;
        
        if(request()->userimage2)
        {
            
            $current = time();
            $image = request()->file('userimage2');
            $name = $current.str_slug(request()->firstname.request()->lastname.auth()->user()->id).'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images/users');

            $image->move($destinationPath, $name);

            $userinfo->image = $name;
            try{
                $userinfo->save();
                return redirect()->back()->with('success', 'Je hebt je gegevens succesvol uitgewisseld');
            }
            catch(\Throwable $e)
            {
                abort(500);
            }
        }
        else
        {
           
                $userinfo->save();

                if($userinfo->send_to_admin == 0 && $userinfo->company == "Company")
                {
                   
                    $data = ([
                        'contactperson'=> request()->firstname2.request()->lastname2,
                        'naambedrijf' => request()->companyname,
                        'companykvk' => request()->companykvk,
                        'adres' => request()->autocompleteaddress,
                        'post' => request()->postcode,
                        'telefoon' => request()->phone2,
                        'email' => auth()->user()->email,
                        'date' => Carbon::now(),
                        'signature' => request()->signature
                    ]);
                    
                    Mail::send(new EmailBecomePartner($data));
                    Mail::send(new EmailConfirmationBecomePartner($data));

                    $userinfo->send_to_admin = 1;
                    
                    $userinfo->save();
                }

                return redirect()->back()->with('success', 'Je hebt je gegevens succesvol uitgewisseld');

            
           
        }
    }

    public function activatecompany()
    {
        
       
        $companyname = request()->partners;

        $company = UserView::where('company_name', $companyname)->first() ?? abort(404);
        
        
        
        
        //generate password for new user - company in user table
        function rand_string( $length ) {

            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        
        }
        
        $password =  rand_string(8);
       
        //make password to user - company
        $hashedPassword = Hash::make($password);
        
        $newUser = new User();
        $newUser->name = $company->firstname;
        $newUser->email = $company->email;
        $newUser->password = $hashedPassword;
        $newUser->email_verified_at = Carbon::now();
        $newUser->role_id = 3;
        $newUser->save();

        $data = [
            'contactperson' => $company->firstname,
            'email' => $company->email,
            'password' => $password
        ];

        
        

        Mail::send('emails.confirmationcompany', array('data' => $data), function($message) use ($data)
        {       $message->from('info@vrijeplaats.nl', 'Je profiel is klaar!');
                $message->to($data['email'])->subject('Beheer en gebruik Vrijeplaats!');
        });
        
        $companyuser = UserView::find($company->id);
        
        $companyuser->user_id = $newUser->id;
        $companyuser->payed_status = 1;
        $companyuser->save();

        $purchase = new Purchase();
        $purchase->inv_id = time();
        $purchase->user_id = $companyuser->user_id;

        $btw = 60.44 / 1.21;
        $btw = round($btw,2);
        $tax = 60.44 - $btw;
        
        $purchase->tax = $tax;
        $purchase->total = 60.44;
        $purchase->role_payment = "Account activatie";
        $purchase->save();
        
        return redirect()->back()->with('success', 'Het bedrijf is succesvol geactiveerd');
        
    }

    public function company($id)
    {
        $company = UserView::find($id) ?? abort(404);

        return view('admin.company.company', compact('company'), $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
