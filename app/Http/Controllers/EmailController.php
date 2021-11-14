<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserSignature;
use Illuminate\Mail\Mailable;
use App\Mail\EmailBecomePartner;
use App\Mail\EmailConfirmationBecomePartner;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function bepartner()
    {
        $contactperson = request()->contactperson;
        $naambedrijf = request()->naambedrijf;
        $adres = request()->adres;
        $post = request()->post;
        $telefoon = request()->telefoon;
        $email = request()->email;
        $date = request()->datum;
        $signature = request()->signature;

        $usersignature = new UserSignature();
        $usersignature->contactperson = $contactperson;
        $usersignature->company_name = $naambedrijf;
        $usersignature->adress = $adres;
        $usersignature->post_code = $post;
        $usersignature->phone = $telefoon;
        $usersignature->date = $date;
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
        Mail::send(new EmailBecomePartner($data));
        Mail::send(new EmailConfirmationBecomePartner($data));
        try{
            $usersignature->save();
        }
        catch(\Throwable $e)
        {
            return abort(500);
        }

        return redirect()->back()->with('success', 'Uw bericht is succesvol doorgestuurd! Je ontvangt binnen 24 uur een nieuwe melding op je e-mailadres');
       

    }
}
