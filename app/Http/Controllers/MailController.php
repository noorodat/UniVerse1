<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function sendMailToStudent($data, $mailTemplate)
    {
        try {
            Mail::to(Auth::user()->email)->send(new MailNotify($data, $mailTemplate));
        } catch (Exception $e) {
            flash()->addError('Mail is not sent');
            return redirect()->back();
        }
    }

    public function contactUs(Request $request)
    {

        $data = [
            'name' => $request->input('contact-name'),
            'email' => $request->input('contact-email'),
            'phone' => $request->input('contact-phone'),
            'subject' => $request->input('subject'), // Changed to match form input
            'body' => $request->input('contact-message'),
        ];

        // dd($request->input('contact-name'), $request->input('contact-email'), $request->input('contact-phone'), $request->input('subject'), $request->input('contact-message'));

        $mailTemplate = 'contact-us';

        try {
            Mail::to('universe.edu.jo@gmail.com')->send(new MailNotify($data, $mailTemplate));
            flash()->addSuccess('Mail sent successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            flash()->addError('Mail is not sent');
            return redirect()->back();
        }
    }
}
