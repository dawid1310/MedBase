<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition($text)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('c3e110c5', 'lRbC20zB07OuZI1z');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '48516851833',
            'from' => 'MedBase',
            'text' => $text[0]." - ".$text[1]
        ]);
 
    }
}