<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function projects()
    {

    }

    public function gallery()
    {
        return view('gallery');
    }

    public function actions()
    {
        return view('actions');
    }

    public function presentation()
    {
        return $this->about();
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => "required",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required"
        ]);

        $contact = new ContactUs;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        session()->flash("success", 'Thank your for your message. ');
        return back();
    }
}
