<?php

// Pear Mail Library
require_once "Mail.php";

$from = '<from.gmail.com>';
$to = '<galinaim@walla.com>';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'out.bezeqint.net',
        'port' => '25',
        'auth' => true,
        'username' => 'yoel1',
        'password' => 'zvin1963'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

echo 'Hello';
echo $_POST['Email'];