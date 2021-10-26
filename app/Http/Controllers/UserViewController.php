<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserView;

class UserViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('user.bewerkprofiel');
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
        $userinfo->phone = request()->phone2;
        $userinfo->bio = request()->bio2;
        $userinfo->linkedin = request()->linkedin2;
        $userinfo->facebook = request()->facebook2;
        $userinfo->instagram = request()->instagram2;
        $userinfo->user_id = auth()->user()->id;

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
