<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    
    public function checkout()
    {
      /*dd(
          Auth::user()->can('createSubs',User::class),
          Auth::user()->can('viewAll',User::class)
        );*/ 
        $subs = Subscription::where(function($query){
            if(Auth::user()->permissionRoles->first()->role_id==2){
                $query->where("user_id", Auth::user()->id);    
            }
        })
        ->get();
        
        return view('admin.payments.subscriptions', compact('subs'));
    }
    
 
    public function payment(Request $request)
    {        
        \Stripe\Stripe::setApiKey('sk_test_51O9yGaEgRMsmGO4f6tq8QjfCsR8fLJ8r1KKfDe22YSrjg9vWCgfcqXbr32s6yIoC4EDtDyprjm5RKhvH4MjpuUZ800NsvFjApH');
    //dd($strupe,env('STRIPE_KEY','pk_test_51O9raKFE1b06eFPnuhzLd9vrYRfm5BEDtJe11xRLSoJNVfU0ZthpHpc1HikDTMCYxwLlXlzRxQQUtgdFlJegJ45100cs8Xxegs'));
        $productname = 'subscription';
        $totalprice = 199;
        $two0 = "00";
        $total = "$totalprice$two0";
        $this->store([
            'stripe_id'=>Auth::user()->stripe_id,
            'price'=> $totalprice
        ]);
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'MXN',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' =>route('success'),
            'cancel_url'  => route('home'),
        ]);
 
        return redirect()->away($session->url);
    }

    public function success()
    {
        return redirect('home');
    }

    public function store($request){
        $subs = new Subscription;
        $subs->name = 'Subscription';
        $subs->user_id = Auth::user()->id;
        $subs->stripe_id =Str::random(10);
        $subs->stripe_status = true;
        $subs->stripe_price = $request['price'];
        $subs->quantity = 1;
        $subs->trial_ends_at = Carbon::now();
        $subs->ends_at = Carbon::now()->addMonth();
        if($subs->save()){
        
        return true; 
        }
        
    }
}
