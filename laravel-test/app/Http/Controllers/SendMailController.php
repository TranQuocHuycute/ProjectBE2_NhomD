<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail()
    {
        $user = 'baocuns';
        $mailable = new SendMail($user);
        Mail::to("baonv.23.student@fit.tdc.edu.vn")
            ->cc("baonguyen2001aa@gmail.com")
            ->queue($mailable);
        return true;
    }
}
