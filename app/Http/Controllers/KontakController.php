<?php

namespace App\Http\Controllers;

use App\Mail\Mailing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    //
    public function index() {
        return view('kontak');
    }

    public function sendMail(Request $request) {
        $name = $request->name;
        $email = $request->email;
        $content = $request->message;
        // dd($request);
        Mail::to('ekharism@protonmail.com')->send(new Mailing($name, $email, $content));
        return "Email sent";
    }
}
