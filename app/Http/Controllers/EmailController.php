<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Mail\EmailBecomePartner;
use App\Mail\EmailConfirmationBecomePartner;
use Illuminate\Support\Facades\Mail;
use App\UserSignature;
use App\UserView;

class EmailController extends Controller
{
    public function bepartner()
    {
        
        $firstname = request()->contactperson;
        $lastname = request()->lastname;
        $naambedrijf = request()->naambedrijf;
        $adres = request()->autocompleteaddress;
        $post = request()->post;
        $telefoon = request()->telefoon;
        $email = request()->email;
        $date = request()->datum;
        $signature = request()->signature;
        
        $usersignature = new UserView();
        $usersignature->firstname = $firstname;
        $usersignature->lastname = $lastname;
        $usersignature->company = "Company";
        $usersignature->company_name = $naambedrijf;
        $usersignature->address = $adres;
        $usersignature->post_code = $post;
        $usersignature->phone = $telefoon;
        $usersignature->email = $email;
        $usersignature->signature = $signature;

        $data = ([
            'contactperson'=> request()->contactperson,
            'naambedrijf' => request()->naambedrijf,
            'adres' => request()->adres,
            'post' => request()->post,
            'telefoon' => request()->telefoon,
            'email' => request()->email,
            'date' => request()->datum,
            'signature' => request()->signature
        ]);
       
        Mail::send(new EmailConfirmationBecomePartner($data));
        
        $usersignature->save();
        
        

        return redirect()->back()->with('success', 'Uw bericht is succesvol doorgestuurd! Je ontvangt binnen 24 uur een nieuwe melding op je e-mailadres');
       

    }
}
