<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserView;
use App\Category;
use App\City;
use App\Post;
use Carbon\Carbon;
use App\Mail\EmailBecomePartner;
use App\Mail\EmailConfirmationBecomePartner;
use Illuminate\Support\Facades\Mail;

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
        $companyId = request()->partners;

        $company = UserView::where('id', $companyId)->first() ?? abort(404);

        $company->payed_status = 1;

        try{
            $company->save();
            return redirect()->back()->with('success', 'Het bedrijf is succesvol geactiveerd');
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }
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
