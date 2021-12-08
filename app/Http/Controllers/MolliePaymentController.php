<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;
use App\Purchase;
use App\User;
use Carbon\Carbon;
use Mollie\Laravel\Facades\Mollie;

class MolliePaymentController extends Controller
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
    public function buyticket($id)
    {
       $post = Post::find($id) ?? abort(404);

       return view('user.checkout', compact('post'), $this->data);
    }
    public function preparePayment()
    {
        $post = Post::find(request()->postid) ?? abort(404);


        if($post)
        {
            $payment = Mollie::api()->payments()->create([
                'amount' => [
                    'currency' => 'EUR', // Type of currency you want to send
                    'value' => $post->price_first, // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                'description' => 'Payment By codehunger', 
                'redirectUrl' => route('payment.success'),
                'webhookUrl'=>'webhooks.mollie' // after the payment completion where you to redirect
                ]);
            
            $payment = Mollie::api()->payments()->get($payment->id);
                
            return redirect($payment->getCheckoutUrl(), 303);
                   
               
               
               
        }
        else
        {
            return abort(404);
        }
        

        
            
    }
    public function paymentSuccess(Request $request) {
        
      

        // if ($payment->isPaid() == TRUE)
        // {
            
        //         $purchase = new Purchase();
        //         $purchase->inv_id = time();
        //         // $purchase->post_id = $post->id;
        //         $purchase->user_id = auth()->user()->id;
        //         // $purchase->category_id = $post->category_id;
        //         $purchase->total = $post->price_first;
        
               
        //         $purchase->save(); // redirect customer to Mollie checkout page
            
      
        // }
        // elseif ($payment->isOpen() == FALSE)
        // {
            
        // }
        return redirect('/home')->with('success', 'Je hebt de coupon succesvol gekocht. BEDANKT voor het bezoeken en gebruiken van het Vrijeplaats platform');
    }
    public  function handlePartnerShip()
    {
        $user = auth()->user();
        return view('user.checkout-partnership', $this->data);
    }

    
    public function paymentforpartership()
    {   
        $user = User::where('id', auth()->user()->id)->first();

      

        if($user)
        {
            $payment = Mollie::api()->payments()->create([
                'amount' => [
                    'currency' => 'EUR', // Type of currency you want to send
                    'value' => "1.44" // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                'description' => 'Payment for parthership By user:'.$user->name.' '.$user->email, 
                'redirectUrl' => route('payment.success'),
                'webhookUrl' => route('webhooks.mollie')
                
              
                 // after the payment completion where you to redirect
                ]);
            
             $payment = Mollie::api()->payments()->get($payment->id);
             
            return redirect($payment->getCheckoutUrl(), 303);
                   
               
               
               
        }
        else
        {
            return abort(404);
        }
    }
   
        public function handle(Request $request) {
         $paymentId = $request->input('id');
         return $paymentId;
        if($request->has('id'))
        {
            $payment = Mollie::api()->payments->get($request->get('id'));
    
            if ($payment->isPaid())
            {
                $purchase = new Purchase();
                $purchase->inv_id = time();
                // $purchase->post_id = $post->id;
                $purchase->user_id = auth()->user()->id;
                // $purchase->category_id = $post->category_id;
                $purchase->total = 60.44;
            
                
                $purchase->save(); 
            }
        }
        return;

        
    }

}
