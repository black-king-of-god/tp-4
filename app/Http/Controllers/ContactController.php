<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class ContactController extends Controller
{
    public function create():View
    {
        return view('contact');
    }
    public function sendMail(Request $request): Response|RedirectResponse|View
    {
        try {
            Mail::to('administrateur@chezmoi.com')->send(new Contact($request->except('_token')));
            return view('mail.confirm');
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'Erreur lors de l’envoi du mail : ' . $e->getMessage()]);
        }
    }


}
