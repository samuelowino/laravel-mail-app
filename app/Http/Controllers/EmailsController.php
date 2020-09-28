<?php

namespace App\Http\Controllers;

use App\Mail\EmailSender;
use App\Models\UserEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function sendEmail(Request $request){
        $title = $request->input('title');
        $body = $request->input('body');
        $toAddress = $request->input('email');

        $UserEmail = new UserEmail($toAddress,$title,$body);

        Mail::to($toAddress)->send(new EmailSender($UserEmail));
        
        return redirect('/');
    }
}
