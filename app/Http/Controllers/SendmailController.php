<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class SendmailController extends Controller
{
    public function sendmail()
    {
        $email = "user@example.com";
        Mail::to($email)->send(new WelcomeEmail());
        return True;
        // Read - Display a list of items
    }
}
