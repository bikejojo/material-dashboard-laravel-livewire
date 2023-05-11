<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Vonage\Laravel\Facade\VonageMessage;

class SmsController extends Controller
{
    //.
    function notificacion(){
    $basic  = new \Vonage\Client\Credentials\Basic("145a9caa", "gMdHhB20gIhEWrRH");
    $client = new \Vonage\Client($basic);

    $response = $client->sms()->send(
        new \Vonage\SMS\Message\SMS("59179836202", '5917936202', 'A text message sent using the Nexmo SMS API'
    ));


        //new \Vonage\SMS\Message\SMS("59179836202", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
    //);

    $message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}
}
}
