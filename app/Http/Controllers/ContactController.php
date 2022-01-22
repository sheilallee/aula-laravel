<?php
/*
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index(Request $request){
        return view("contact");
    }

    public function send(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|max:250|email',
            'phone' => 'regex:/\([0-9]{2}\)[0-9]{5}-[0-9]{4}/', # ou regex:/\([0-9]{2}\)[0-9]{5}-[0-9]{4}/
            'subject' => 'required|max:250',
            'message' => 'required|max:8000'
        ]);

        
        $contact = Contact::create($request->all());

        #envia o e-mail
        Notification::route("mail", config("mail.from.address"))
                ->notify(new NewContact($contact));


        return redirect()->back()->with('success', 'Your message was sent');
    }

        
}
*/


namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index(Request $request){
        return view("contact");
    }

    public function send(Request $request){
        #dd($request->all());
        $contact = Contact::create($request->all());

        #envia o e-mail
        Notification::route("mail", config("mail.from.address"))
        ->notify(new NewContact($contact));

        #dd($contact);
        return redirect()->back();
    }
  
}

