<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    function sendEmail($email) {
        Mail::to($email)->send(new TestEmail());
        return redirect('/');
    }
}
