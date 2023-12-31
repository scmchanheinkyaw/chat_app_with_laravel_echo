<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/playground',function(){
    event (new App\Events\ChatMessageEvent());
    return null;
});

Route::get('/ws',function(){
    return view('websocket');
});


Route::post('/chat-message',function(Request $request){
    event (new App\Events\ChatMessageEvent($request->message));
});

