<?php

namespace App\Http\Controllers;
use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class TwilioSMSController extends Controller
{
    public function index()
    {
        $receiverNumber = "+8801521119051";
        $message = "This is testing from ItSolutionStuff.com";

        try {

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }
}
