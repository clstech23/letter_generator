<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use DB;
class CheckoutController extends Controller
{

    public function checkout(){
        $data = new Customer();
        $userId = Auth::id();
        $data['allData'] = DB::table('customers')->where('user_id', $userId)->get();
        return view ( 'checkout.cardForm',$data);
    }
    //
    public function call(Request $request) {
        \Stripe\Stripe::setApiKey('SET_YOUR_SECRET_KEY_HERE');
        $customer = \Stripe\Customer::create(array(
          'name' => 'test',
          'description' => 'test description',
          'email' => 'email@gmail.com',
          'source' => $request->input('stripeToken'),
           "address" => ["city" => "San Francisco", "country" => "US", "line1" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]

      ));
        try {
            \Stripe\Charge::create ( array (
                    "amount" => 300 * 100,
                    "currency" => "usd",
                    "customer" =>  $customer["id"],
                    "description" => "Test payment."
            ) );
            Session::flash ( 'success-message', 'Payment done successfully !' );
            return view ( 'checkout.cardForm' );
        } catch ( \Stripe\Error\Card $e ) {
            Session::flash ( 'fail-message', $e->get_message() );
            return view ( 'checkout.cardForm' );
        }
    }
}
