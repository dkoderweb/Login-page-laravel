<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginpage;

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

Route::post('register',[loginpage::class,'register']);
Route::post('login',[loginpage::class,'login']);
Route::view('/','home');


Route::view('register','register');
Route::view('login','login');
Route::get('/logout', function () {
    if(Session::get('user')){
        session()->pull('user');
    }
    Session::flash('logout',"You are logged out!");

    return redirect('login');
});
 