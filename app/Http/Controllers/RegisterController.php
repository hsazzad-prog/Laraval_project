<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
class RegisterController extends Controller
{
      /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    function getregister(Request $request)
    {
        $this->validate($request,
    ['name'=>'required'],
    ['required'=>'your name is required']
    );
    if(isset($error))
    {
    $output=$request->name;
return $output;
    }
    else
    {
        $usetable= new UserModel(); 
        $usetable->name=$request->name;
        $usetable->age=$request->age;
        $usetable->email=$request->email;
        $usetable->save();

        return view('login');
    }
    }
}
