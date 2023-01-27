<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Hash;
class usese extends Controller
{
    //
    function login(Request $req){
    //  $user=User::where(['email'=>$req->email])->first();
    //  if($user ||Hash::check($req->password,$user->password));
    //  {
    //     return "User name or password is not matched";
    //  }
    //  return redirect("/");
    return $req->input();
    }

}
