<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    public function showTitle() {
        return view('helloworld');
    }


}
