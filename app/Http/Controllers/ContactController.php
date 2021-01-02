<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Notifications\InboxMessage;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {    
            return view('contact');
    }


    public function mailToAdmin(ContactFormRequest $message, Admin $admin) {
        $admin->notify(new InboxMessage($message));
        // redirect the user back
        return redirect()->back()->with('message', 'Thanks for the message! We will get back to you soon!');
    }
}