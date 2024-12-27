<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\Registersendmail;
use App\Models\Registration;

class MailsendController extends Controller
{
    public function mailsend()
    {
        $toEmail = Session::get('mail_email');
        $message = "hello bhai";
        $subject = "Registration successfully";

        $request = Mail:: to($toEmail)->send(new Registersendmail($subject,$toEmail));

        if($request)
        {
            
            Session::forget('mail_email');
            // echo "Mail send Successfull";

            if(Session::get('mail_email')== '')   
            {
                return redirect()->route('login-form')->with('success', 'You are registered successfully! Please check your email & Login Now.');
            } else{
                echo "mail Session set he";
            }        
           
           
        }else{
            echo"mail send Failed";
        }
        
    } 
}
