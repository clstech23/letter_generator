<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use PDF;
use Stripe;
use Session;

class CustomerController extends Controller
{
    
    public function customerView(){

        $userId = Auth::id();
        $data['allData'] = DB::table('customers')->where('user_id', $userId)->get();
        //$data['allData']= Customer::all();
    	return view('clsu.customer_view',$data);

    }
    
    public function Addcustomer(){
    	return view('clsu.customeradd');

    }

    public function customerStore(Request $request){

       
    	$validatedData = $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'letter' => 'required',
            'account_name' => 'required',
            'account_number' => 'required',
    		'agency' => 'required',
            'date' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
    	]);
        //dd( $request);
    	$data = new Customer();
        $userId = Auth::id();
    	$data->fullname         = $request->fullname;
        $data->address          = $request->address;
        $data->mobile           = $request->mobile;
        $data->letter           = $request->letter;

        switch ($data->letter) {
					
            case "ARLR1":
                $amount_dsc = "97";
                $dscr = "Account Removal Letter R1";
                break;
            case "ARLR2":
                $amount_dsc = "97";
                $dscr = "Account Removal Letter R2";
                break;
            case "ITDL":
                $amount_dsc = "97";
                $dscr = "Identity Theft Dispute Letter";
                break;
            case "NPRRPC":
                $amount_dsc = "97";
                $dscr = "No Parking Rule Refusal to Pay Cease and Desist";
                break;
            case "LPD":
                $amount_dsc = "97";
                $dscr = "Late Payment Deletion Letter";
                break;
            case "PIUL":
                $amount_dsc = "97";
                $dscr = "Personal Information Update Letter";
                break;
            case "ALDL":
                $amount_dsc = "97";
                $dscr = "Auto Loan Deletion Letter";
                break;
            case "MCD":
                $amount_dsc = "49";
                $dscr = "Medical Collection Deletion";
                break;

            case "BDL":
                $amount_dsc = "97";
                $dscr = "Bankrupcy Deletion Letter";
                break;
            case "MC":
                $amount_dsc = "97";
                $dscr = "Medical Collection";
                break;
            case "REL":
                $amount_dsc = "97";
                $dscr = "Repossession Letter";
                break;
            case "CDVNL":
                $amount_dsc = "97";
                $dscr = "Cease and Desit Volenti Non Injuria";
                break;
            case "MDL":
                $amount_dsc = "97";
                $dscr = "Mortgage Deletion Letter";
                break;
            case "SLDL":
                $amount_dsc = "97";
                $dscr = "Student Loan Deletion Letter";
                break;
            case "COL":
                $amount_dsc = "97";
                $dscr = "Charge Off Letter";
                break;
            case "CSL":
                $amount_dsc = "97";
                $dscr = "Child Support Letter";
                break;
            case "DVL":
                $amount_dsc = "97";
                $dscr = "Debt Validation Letter";
                break;
            case "IRL":
                $amount_dsc = "97";
                $dscr = "Inquiry Removal Letter";
                break;
            
             }

        $data->amount           = $amount_dsc;
        $data->account_name     = $request->account_name;
        $data->account_number   = $request->account_number;
        $data->agency           = $request->agency;
        $data->date             = $request->date;
        $data->state            = $request->state;
        $data->city             = $request->city;
        $data->zipcode          = $request->zipcode;
        $data->user_id          = $userId;
    	$data->code             = rand(0000,9999);
    	$data->save();

    	$notification = array(
    		'message' => 'Customer Letter Details Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('customer.view')->with($notification);

    }


    public function customerEdit($id){
    	$editData = Customer::find($id);
    	return view('clsu.customer_edit',compact('editData'));

    }

    public function customerUpdate(Request $request, $id){
          
    	$data = Customer::find($id);
    	$data->fullname         = $request->fullname;
        $data->address          = $request->address;
        $data->mobile           = $request->mobile;
        $data->letter           = $request->letter;
        $data->account_name     = $request->account_name;
        $data->account_number   = $request->account_number;
        $data->agency           = $request->agency;
        $data->date             = $request->date;
        $data->state            = $request->state;
        $data->city             = $request->city;
        $data->zipcode          = $request->zipcode;
    	$data->save();

    	$notification = array(
    		'message' => 'Customer Letter Details Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('customer.view')->with($notification);

    }


    public function customerDelete($id){
    	$user = Customer::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'Customer Letter Details Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('customer.view')->with($notification);

    }

    public function customerDetails($id){
       $data['details'] = DB::table('customers')->where('id', $id)->first();
       $pdf = PDF::loadView('clsu.template',$data);
       $pdf->SetProtection(['copy', 'print'], '', 'pass');
       return $pdf->stream('document.pdf');
       }


    public function checkout($id){

        session()->put('Customer_id', $id);
        //$data = Customer::find($id);
        $data['allData'] = DB::table('customers')->where('id', $id)->get();
        
        return view ( 'checkout.cardForm',$data);
    }
    //
    public function call(Request $request) {

        //\Stripe\Stripe::setApiKey('SET_YOUR_SECRET_KEY_HERE');
        \Stripe\Stripe::setApiKey('sk_test_51MmHJECxddf0HBANSFsXBTD5lNnABZbevNdiXN1d1w4xHn5mYK7XquYvt1YKkKhx7hCxgY91p9PliYdvifLEMS8G00WpH19TsH');
        
        switch ($request->input('letter')) {
					
            case "ARLR1":
                $amount_dsc = "97";
                $dscr = "Account Removal Letter R1";
                break;
            case "ARLR2":
                $amount_dsc = "97";
                $dscr = "Account Removal Letter R2";
                break;
            case "ITDL":
                $amount_dsc = "97";
                $dscr = "Identity Theft Dispute Letter";
                break;
            case "NPRRPC":
                $amount_dsc = "97";
                $dscr = "No Parking Rule Refusal to Pay Cease and Desist";
                break;
            case "LPD":
                $amount_dsc = "97";
                $dscr = "Late Payment Deletion Letter";
                break;
            case "PIUL":
                $amount_dsc = "97";
                $dscr = "Personal Information Update Letter";
                break;
            case "ALDL":
                $amount_dsc = "97";
                $dscr = "Auto Loan Deletion Letter";
                break;
            case "MCD":
                $amount_dsc = "49";
                $dscr = "Medical Collection Deletion";
                break;

            case "BDL":
                $amount_dsc = "97";
                $dscr = "Bankrupcy Deletion Letter";
                break;
            case "MC":
                $amount_dsc = "97";
                $dscr = "Medical Collection";
                break;
            case "REL":
                $amount_dsc = "97";
                $dscr = "Repossession Letter";
                break;
            case "CDVNL":
                $amount_dsc = "97";
                $dscr = "Cease and Desit Volenti Non Injuria";
                break;
            case "MDL":
                $amount_dsc = "97";
                $dscr = "Mortgage Deletion Letter";
                break;
            case "SLDL":
                $amount_dsc = "97";
                $dscr = "Student Loan Deletion Letter";
                break;
            case "COL":
                $amount_dsc = "97";
                $dscr = "Charge Off Letter";
                break;
            case "CSL":
                $amount_dsc = "97";
                $dscr = "Child Support Letter";
                break;
            case "DVL":
                $amount_dsc = "97";
                $dscr = "Debt Validation Letter";
                break;
            case "IRL":
                $amount_dsc = "97";
                $dscr = "Inquiry Removal Letter";
                break;
            
             }

        $customer_id = (Session::get('Customer_id'));
        $payment_address = Customer::where('id',$customer_id)->first();

        $userId = Auth::id();
        $user_det = User::where('id',$userId)->first();

        $customer = \Stripe\Customer::create(array(
            'name' => $user_det->name,//$request->input('cardname'),
            'description' => $dscr,
            'email' => $user_det->email, //'email@gmail.com',
            'source' => $request->input('stripeToken'),
            "address" => ["city" => "San Francisco", "country" => "US", "line1" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]

      ));
        try {
            \Stripe\Charge::create ( array (
                    "amount" => $amount_dsc *100,
                    "currency" => "usd",
                    "customer" =>  $customer["id"],
                    "description" => $dscr
            ) );

            $data['allData']= array();
            $customer_id = (Session::get('Customer_id'));
            $payment_det = Customer::where('id',$customer_id)->first();    	 
            $payment_det->payment_code  = "Pay_".rand(0000,9999);
            $payment_det->save();

            $notification = array(
                'message' => 'Payment done successfully. Please click to download your letter',
                'alert-type' => 'info'
            );
            
            return redirect()->route('customer.view',$data)->with($notification);

            // Session::flash ( 'success-message', 'Payment done successfully !' );
            //return view ( 'clsu.customer_view',$data);
        } catch ( \Stripe\Error\Card $e ) {
            Session::flash ( 'fail-message', $e->get_message() );
            return view ( 'checkout.cardForm' );
        }
    }

} 
