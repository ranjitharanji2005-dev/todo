<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test',function(){


$user = User::where('name','ranju')->first();
dd($user);


$a  ='123';
return view('test',compact('a'));
});

Route::get('check/{a}',[Testcontroller::class,'check']);

 Route::get('/test1',function(){
    $user=user::where('email','ranjitha45.com')->all();

    $b='4567';
    return view('test1',compact('b'));
 });
