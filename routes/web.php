<?php

use App\Http\Controllers\EmailsController;
use Illuminate\Support\Facades\Route;

Route::post('/send-mail', [EmailsController::class, 'sendEmail'])->name('sendMail');

Route::get('/', function(){

    $appName = "Mail Demo";
    $username = "Bruce Lee";

    return view('home', [
        "appname" => $appName,
        "username" => $username
    ]);
});

Route::get('/compose-email', function(){
    return view('compose', ['username' => 'John Doe']);
});