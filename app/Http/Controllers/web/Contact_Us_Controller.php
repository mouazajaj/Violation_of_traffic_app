<?php

namespace App\Http\Controllers\web;

use App\Mail\Notification;
use Illuminate\Http\Request;
use App\Notifications\SendMessage;
use App\Http\Controllers\Controller;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Support\Facades\Mail;

class Contact_Us_Controller extends Controller
{
    public function index()
    {
        return view('contact_us');
    }
    public function Sendmail(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'message' => 'required',
        ]);
        Mail::raw($request->input('message'), function ($message) use ($request) {
            $message->from($request->input('email'));
            $message->to('policetraffic@admin.com', 'Admin');
        });
        return redirect('/contact-us');
    }
}
