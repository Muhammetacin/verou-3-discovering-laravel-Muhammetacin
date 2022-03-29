<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    public function getHome() {
        return view('home');
    }

    public function getWelcomePage() {
        return view('welcome');
    }

    public function getAboutPage() {
        return view('about');
    }
}
