<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    public function showTitle() {
        return view('helloworld');
    }

    public function getWelcomePage() {
        return view('mywelcome');
    }

    public function getAboutPage() {
        return view('about');
    }
}
