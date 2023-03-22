<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Letter;
use DB;

class LetterController extends Controller
{
    //
	private $letter = "";
	private function LetterAbr($abr){
			switch ($abr) {
			case "ARLR1":
				$dscr = "Account Removal Letter R1";
				break;
			case "ARLR2":
				$dscr = "Account Removal Letter R2";
				break;
			case "ITDL":
				$dscr = "Identity Theft Dispute Letter";
				break;
			
			}
			return $dscr;

	}
    public function LetterView(){

        $data['allData']= Letter::all();
    	return view('clsu.view',$data);

    }
    
    //AddLetter

    public function AddLetter(){
    	return view('clsu.add');

    }


    public function LetterStore(Request $request){

       
    	$validatedData = $request->validate([
    		'letter' => 'required',
            'letter_dsc' => 'required',
    	]);
        //dd( $request);
    	$data = new Letter();
    	$data->letter   = $request->letter;
        $data->letter_dsc   = $request->letter_dsc;
    	$data->save();

    	$notification = array(
    		'message' => 'Letter Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('letter.view')->with($notification);

    }


    public function LetterEdit($id){
    	$editData = Letter::find($id);
		//dd($editData);
    	return view('clsu.letter_edit',compact('editData'));

    }

    public function LetterUpdate(Request $request, $id){

    	$data = Letter::find($id);
    	$data->letter   = $request->letter;
        $data->letter_dsc   = $request->letter_dsc;
    	$data->save();

    	$notification = array(
    		'message' => 'Letter Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('letter.view')->with($notification);

    }
   public function LetterDelete($id){
    	$user = Letter::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('letter.view')->with($notification);

    }
}
