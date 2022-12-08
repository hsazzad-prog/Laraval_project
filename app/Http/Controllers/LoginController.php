<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class LoginController extends Controller
{
    function checklogin(Request $request)
    {
$usertable= new UserModel();
$result=$usertable->where('name', $request->name)->where('email', $request->email)->first();
//$email=$usertable->where('email', $request->email);

if(!empty($result))
{
    session()->put("name",$request->name);
    return redirect("profile");
}
else{
  //  $output="wrong info";
    return view("login")->with("output","no user found");
}

    }
}
