<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.contact');
    }

    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

    //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('ahmfariz24@gmail.com', 'Admin')->subject('Pesan');
        });



        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
