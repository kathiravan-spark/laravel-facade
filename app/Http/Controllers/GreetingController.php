<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    
    public function viewPage(){
        dd('Welcome here');
    }

    public function secondPage(){
        dd('Welcome second Page');
    }
}

