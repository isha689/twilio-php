<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require(__DIR__.'/../src/Twilio/autoload.php');

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = getenv('ACCOUNT_SID');
$token = getenv('AUTH_TOKEN');
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$message = $client->messages->create(
// the number you'd like to send the message to
    'your-phone-number',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => 'twilio-purchased-phone-number',
        // the body of the text message you'd like to send
        'body' => "Hey Jenny! Good luck on the bar exam!"
    ]
);
print("Message sent successfully with sid = " . $message->sid ."\n\n");
sleep(5);

$messageList = $client->messages->read([],10);
foreach ($messageList as $mesg) {
    print("ID:: ". $mesg->sid . " | " . "From:: " . $mesg->from . " | " . "TO:: " . $mesg->to . " | "  .  " Status:: " . $mesg->status . " | " . " Body:: ". $mesg->body ."\n");
}

