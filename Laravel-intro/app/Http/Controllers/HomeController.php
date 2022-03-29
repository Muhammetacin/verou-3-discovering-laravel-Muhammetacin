<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome()
    {
        return view('home');
    }

    public function getWelcomePage()
    {
        return view('welcome');
    }

    public function getAboutPage()
    {
        return view('about');
    }

    public function getUserDataForm(Request $request)
    {
        $request->validate([
           'name' => 'required|string',
           'email' => 'required|email',
        ]);
    }
}
