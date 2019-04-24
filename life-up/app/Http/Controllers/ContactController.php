<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function index(){
		return view('contact');
	}
	
	public function store(ContactFormRequest  $request){
	
	    $contact = [];

		$contact['lastname'] = $request->get('lastname');
		$contact['firstname'] = $request->get('firstname');
		$contact['phoneNumber'] = $request->get('phoneNumber');
		$contact['address'] = $request->get('address');
		$contact['email'] = $request->get('email');
		$contact['message'] = $request->get('message');
	
	
		Mail::to('baonville.jimmy@gmail.com')->send(new ContactEmail($contact));
		return back()->with('success', 'Life-Up vous remercie pour votre message.  Nous vous recontacterons au plus vite.');
	
	}
}


