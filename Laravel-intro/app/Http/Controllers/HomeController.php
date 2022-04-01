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

//        clock(Visitor::with('address')->where('id', 2)->first());

//        return view('welcome', compact('visitors'));
        return view('welcome_tailwind', compact('visitors'));
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
            'street' => 'required|string',
            'number' => 'numeric',
            'city' => 'string',
            'country' => 'string'
        ]);

        $this->saveVisitorData($request);

        session()->flash('success', 'Thanks for the data. I will use it for research purposes.');

        return redirect('/');
    }

    private function saveVisitorData(Request $request)
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

        clock($visitor->id);
        $this->saveVisitorAddress($visitor->id, $request);


//        $visitor = new Visitor;
//        $visitor->name = $request->name;
//        $visitor->email = $request->email;
//        $visitor->save();
    }

    private function saveVisitorAddress(int $id, Request $request)
    {
        Address::insert([
            'visitor_id' => $id,
            'street' => $request->street,
            'number' => $request->number,
            'city' => $request->city,
            'country' => $request->country,
        ]);
    }
}
