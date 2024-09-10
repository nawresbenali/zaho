<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\calcul;


use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $calc = calcul::orderBy('id','DESC')->first(); //where('user_id', auth()->id())->
        return view('stripe', compact('calc'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $calc = calcul::orderBy('id','DESC')->first(); //where('user_id', auth()->id())->
        Stripe\Charge::create ([
                "amount" => $calc->price,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com."
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
