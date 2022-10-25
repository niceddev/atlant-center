<?php

namespace App\Http\Controllers;

use App\Mail\SignUpForConsultation;
use App\Models\EmailForConsultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        Mail::to(
            EmailForConsultation::first()->email
            ?? config('mail.mailers.smtp.username'))->send(new SignUpForConsultation($request)
        );

        return redirect()->back();
    }

}
