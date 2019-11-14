<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
    	request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
        ], [
        	'name.required' => __('I need your name')

    	]);

    	Mail::to('carlos@gmail.com')->send(new MessageReceived);

    	return 'Mensaje enviado';
    }
}
