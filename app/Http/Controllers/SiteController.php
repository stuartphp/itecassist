<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function products()
    {
        return view('products');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function fqa()
    {
        return view('fqa');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactPost(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        Mail::send('contact_reply', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('stuart@itecassist.co.za', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and will get back to you within 24 hours.');
    }
    public function services()
    {
        return view('services');
    }

}
