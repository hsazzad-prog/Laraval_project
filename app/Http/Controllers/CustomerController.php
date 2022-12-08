<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function index()
    {
        $customer= Customer::all();

        return view("allcustomer")->with("customer",$customer);
    }
}
