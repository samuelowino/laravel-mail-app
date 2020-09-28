<?php

use App\Http\Controllers\EmailsController;
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::post('/send-mail', [EmailsController::class, 'sendEmail'])->name('sendMail');

Route::get('/', function(){

    $appName = "Mail Demo";
    $user = "Bruce Lee";

    return view('home', [
        "appname" => $appName,
        "user" => $user
    ]);
});

Route::get('/compose-email', function(){
    return view('compose');
});