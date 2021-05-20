<?php

use Illuminate\Support\Facades\Route;
use App\Models\Address;
use App\Models\User;


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

Route::get('/user', function(){
    $addresses =User::with('address')->get();
    return view('user', compact('addresses'));
    
});

Route::get('/address', function(){
    $addresses =Address::with('user')->get();
    return view('address', compact('addresses'));
    
});

Route::get('/usermanyaddress', function(){
    $users =User::with('usermanyaddress')->get();
    return view('usermanyaddress', compact('users'));
    
});



