<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
  
use PDF;
//use Mail;
  
class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data["email"] = "samuel36991977@gmail.com";
        $data["title"] = "From CLSU.com";
        $data["body"] = "This is Demo";
  
        $pdf = PDF::loadView('emails.myTestMail', $data);
  
        Mail::send('emails.myTestMail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });
  
        dd('Mail sent successfully');
    }
}