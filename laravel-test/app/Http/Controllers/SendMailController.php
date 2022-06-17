<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public static function sendMail($message)
    {
        $user = auth()->user();
        $mailable = new SendMail($user, $message);
        Mail::to($user->email)
            ->queue($mailable);
        return true;
    }
}
