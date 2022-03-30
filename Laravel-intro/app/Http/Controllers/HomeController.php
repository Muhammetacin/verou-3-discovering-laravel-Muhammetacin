<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
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
        $visitors = Visitor::get();
//        dd($visitors);

        return view('welcome', compact('visitors'));
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

        $this->saveUserData($request);

        session()->flash('success', 'Thanks for the data. I will use it for research purposes.');

        return redirect('/');
    }

    private function saveUserData(Request $request)
    {
        Visitor::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
//        $visitor = new Visitor;
//        $visitor->name = $request->name;
//        $visitor->email = $request->email;
//        $visitor->save();
    }
}
