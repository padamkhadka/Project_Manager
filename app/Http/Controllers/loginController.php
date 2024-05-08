<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public $data;
    public function logn(Request $request){

        $username =  $request->username;
        $password =  $request->password;

        $login= login::where('email', $username)->where('password', $password)->first();

        if($login){
           echo 'match';
        }else {
           echo 'not match';
        }
    }
}
