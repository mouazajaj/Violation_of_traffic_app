<?php

namespace App\Http\Controllers\web;

use sid;
use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SMSController extends Controller
{
    public function index()
    {

        $message = "All About Laravel";
        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);

            $client->messages->create('+963993745979', [
                'from' => $number,
                'body' => $message
            ]);
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
        return "message sent";
    }
}
