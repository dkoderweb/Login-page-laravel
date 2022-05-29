<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Whoops\Run;
use App\Models\loginpagemodel;
use Crypt;

class loginpage extends Controller
{
    function register(Request $req){
        $req->validate([

            'username' => 'required|unique:member,username',
            'password' => '|required_with:confirm_password|same:confirm_password',
         ]);

         $user = new loginpagemodel;
         $user ->username=$req->username;
         $user ->password=Crypt::encrypt($req->password);
         $user->save();
         $req->session()->flash('register','Registration Successful.');
         return redirect('login');
         
    }
    function login(Request $login){
        $user = loginpagemodel::where('username',$login->username)->get();
         if(Crypt::decrypt($user[0]->password)==$login->password){
             $login->session()->put('user',$user[0]->username);
          $login->session()->flash('login','Login Successful.');
         return redirect('/');
        }
        else{
            $login->session()->flash('wrong','Check Your Password and try again!');
            return redirect('login');

        }
    }
}
