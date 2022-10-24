<?php

namespace App\Http\Controllers;

use App\Mail\SignUpForConsultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        Mail::to(config('mail.mailers.smtp.username'))->send(new SignUpForConsultation($request));
        return redirect()->back();
    }

}
