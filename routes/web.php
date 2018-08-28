<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('HDTutoMail', function () {

    Mail::send('emails.HDTutoMail', [], function ($message) {
        $message->from('from@johndoe.com', 'From Name');
        $message->sender('sender@johndoe.com', 'Sender Name');
        $message->to('victoria97916@gmail.com', 'asd');
        $message->subject('fdg');

    });
    //for($i = 0; $i < 10; $i++)
        //Mail::to('victoria97916@gmail.com')->send(new \App\Mail\HDTutoMail());

    dd("Email is Send.");

});
