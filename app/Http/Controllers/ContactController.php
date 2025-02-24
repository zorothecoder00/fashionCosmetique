<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request){
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'mail' =>'required|email|max:255',
        ]);

        //Envoi du mail
        Mail::to('from@example.com')->queue(new ContactFormMail(
            $validated['firstname'],
            $validated['name'],
            $validated['phone'],
            $validated['mail'],
        ));


        // Redirection avec un message de succès
        return back()->with('success', 'Votre message a été envoyé avec succès !');
    
    }
}
