<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    
    public function index()
     {
        $basic  = new \Nexmo\Client\Credentials\Basic('b818fe87', 'jUsE1BOxC01LEJGI');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '256775401793',
            'from' => 'James',
            'text' => 'A text message sent using the Nexmo SMS API'
         ]);
        // curl -X "POST" "https://rest.nexmo.com/sms/json" \
        // -d "from=Vonage APIs" \
        // -d "text=A text message sent using the Vonage SMS API" \
        // -d "to=256775401793" \
        // -d "api_key=b818fe87" \
        // -d "api_secret=jUsE1BOxC01LEJGI"
 
        dd('message send successfully');
    }

}
