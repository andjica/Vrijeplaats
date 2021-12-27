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
            $partnerId = auth()->user()->id;
            $mollie = new \Mollie\Api\MollieApiClient();
            $mollie->setApiKey("test_tKbaxfWmF73tKrRb5rMjGKgnBgwaf5");
          
            $payment = $mollie->payments->create([
                'amount' => [
                    'currency' => 'EUR', // Type of currency you want to send
                    'value' => $post->price_discount, // You must send the correct number of decimals, thus we enforce the use of strings
                ],
                'description' => 'Payment By codehunger', 
                'redirectUrl' => route('payment.success', ['id'=> $post->id]),
                'webhookUrl'=> 'https://vrijeplaats.nl/public/webhooks-mollie' // after the payment completion where you to redirect
                ]);
               
           
            $payment = $mollie->payments->get($payment->id);
            
            $purchase = new Purchase();
            $purchase->inv_id = $payment->id;
            $purchase->post_id = $post->id;
            $purchase->user_id = auth()->user()->id;
            $purchase->category_id = $post->category_id;
            $purchase->total = $post->price_discount;
            
            if($post->category->tax == 6)
            {
                
                $posttax = $post->price_discount / 1.06;
                $posttax = round($posttax,2);
                
                $tax = $post->price_discount - $posttax;
                
                $purchase->tax = $tax;
            }
            else
            {
                $posttax = $post->price_discount / 1.21;
                $posttax = round($posttax,2);
                
                $tax = $post->price_discount - $posttax;
                
                $purchase->tax = $tax;
            }
            
            $purchase->role_payment = "coupons";
            $purchase->save(); 

            $payment = $mollie->payments->get($payment->id);

            if ($payment->isPaid())
            {
                echo "Payment received.";
            }
            
            return redirect($payment->getCheckoutUrl(), 303);
                   
               
           
               
        }
        else
        {
            return abort(404);
        }
        

        
            
    }
    public function paymentSuccess($id) {
        
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
   
        // public function handle(Request $request) {
        //  $paymentId = $request->input('id');
       
        // if($request->has('id'))
        // {
        //     $payment = Mollie::api()->payments->get($request->get('id'));
    
        //     if ($payment->isPaid())
        //     {
        //         $purchase = new Purchase();
        //         $purchase->inv_id = time();
        //         // $purchase->post_id = $post->id;
        //         $purchase->user_id = auth()->user()->id;
        //         // $purchase->category_id = $post->category_id;
        //         $purchase->total = 60.44;
            
                
        //         $purchase->save(); 
        //     }
        // }
        // return;

        
    // }

    public function handle(Request $request){

      
      
        $payment = $mollie->payments->get($request->id);
        $statusOfPayment='';
    
        if ($payment->isPaid() && !$payment->hasRefunds() && !$payment->hasChargebacks()) {
            /*
             * The payment is paid and isn't refunded or charged back.
             * At this point you'd probably want to start the process of delivering the product to the customer.
             */
               $statusOfPayment='paid';
    
        } elseif ($payment->isOpen()) {
            /*
             * The payment is open.
             */
             $statusOfPayment='open';
        } elseif ($payment->isPending()) {
            /*
             * The payment is pending.
             */
             $statusOfPayment='pending';
    
        } elseif ($payment->isFailed()) {
            /*
             * The payment has failed.
             */
            $statusOfPayment='failed';
    
        } elseif ($payment->isExpired()) {
            /*
             * The payment is expired.
             */
        } elseif ($payment->isCanceled()) {
            /*
             * The payment has been canceled.
             */
    
              $statusOfPayment='expired';
    
        } elseif ($payment->hasRefunds()) {
            /*
             * The payment has been (partially) refunded.
             * The status of the payment is still "paid"
             */
    
                $statusOfPayment='partially refunded';
        } elseif ($payment->hasChargebacks()) {
            /*
             * The payment has been (partially) charged back.
             * The status of the payment is still "paid"
             */
              $statusOfPayment='partially charged back';
        }

        
        $UserTransaction= Purchases::where('inv_id',$payment->id)->first();
        $UserTransaction->status=$statusOfPayment;
        $UserTransaction->save();
    }

}
