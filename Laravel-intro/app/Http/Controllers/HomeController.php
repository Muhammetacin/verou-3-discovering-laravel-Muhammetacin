<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
//        $visitors = Visitor::get();
        $visitors = Visitor::with('address')->get();


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
            'street' => 'string',
            'number' => 'numeric',
            'city' => 'string',
            'country' => 'string'
        ]);

        $this->saveUserData($request);

        session()->flash('success', 'Thanks for the data. I will use it for research purposes.');

        return redirect('/');
    }

    private function saveUserData(Request $request)
    {
        $visitor = Visitor::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

//        Address::create([
//            'visitor_id' => $visitor->id,
//            'street' => $request->street,
//            'number' => $request->number,
//            'city' => $request->city,
//            'country' => $request->country,
//        ]);

        Address::insert([
            'visitor_id' => $visitor->id,
            'street' => $request->street,
            'number' => $request->number,
            'city' => $request->city,
            'country' => $request->country,
        ]);

//        $visitor = new Visitor;
//        $visitor->name = $request->name;
//        $visitor->email = $request->email;
//        $visitor->save();
    }
}
