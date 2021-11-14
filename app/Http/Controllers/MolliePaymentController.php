<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Post;
use App\Purchase;
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
                'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
                ]);
            
                $payment = Mollie::api()->payments()->get($payment->id);
            
                if($payment)
                {
                    $purchase = new Purchase();
                    $purchase->inv_id = time().$post->id;
                    $purchase->post_id = $post->id;
                    $purchase->user_id = auth()->user()->id;
                    $purchase->category_id = $post->category_id;
                    $purchase->total = $post->price_first;

                   
                    $purchase->save(); // redirect customer to Mollie checkout page

                
                    return redirect($payment->getCheckoutUrl(), 303);
                   
                   
                }
                else
                {
                    return abort(500);
                }
        }
        else
        {
            return abort(404);
        }
        

        
            
    }
    public function paymentSuccess() {

        return redirect('/home')->with('success', 'Je hebt de coupon succesvol gekocht. BEDANKT voor het bezoeken en gebruiken van het Vrijeplaats platform');
    }

}
