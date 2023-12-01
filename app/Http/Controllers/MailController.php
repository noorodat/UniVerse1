<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function sendMailToStudent($data)
    {
        try {
            Mail::to(Auth::user()->email)->send(new MailNotify($data));
        } catch (Exception $e) {
            flash()->addError('Mail is not sent');
            return redirect()->back();
        }
    }
}
