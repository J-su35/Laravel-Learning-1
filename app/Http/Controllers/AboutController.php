<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        // submit value to view 1)associate array
        $address = "123 Bangkok, Thailand";
        $phone = "065 552 4915";
        $email = "det_a248@hotmail.com";
        // return view('about', ['address'=>$address, 'phone'=>$phone, 'email'=>$email]);

        //-------------------------------------------------------------------------------
        // submit value to view 2)compact function    
        // return view('about', compact('address', 'phone', 'email'));

        //-------------------------------------------------------------------------------
        // submit value to view 3)with function  
        return view('about')
        ->with('address',$address)
        ->with('phone', $phone)
        ->with('email', $email)
        ->with('status', "Ready");
    }

    function showData() {
        echo "Hello Laravel 9";
    }
}
