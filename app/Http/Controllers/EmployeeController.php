<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   function index()
   {
    $employee= Employee::all();

    return view("allemployee")->with("employee", $employee);

   }
}
