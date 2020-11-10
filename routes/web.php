<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});



Route::post('/', function (Request $request) {

    $data = array
    (
        'name' => $request->name,
        'email'=>$request->email,
        'phone' => $request->phone,
        'messagetext'=>$request->messagetext
    );

    Mail::send('contacttext', $data, function ($message) use ($request) {
        $message->subject('Bana Yazın!');
        $message->from('hello@example.com', 'Example');
        $message->to('sercan.sports.training@gmail.com', 'Example');
    });
    return view('welcome')->with('send', TRUE);
});



