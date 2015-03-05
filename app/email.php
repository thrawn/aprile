<?php

// send email


function email($subject,$body){

            $email = Auth::user()->email;
            $ses = AWS::get('Ses');
            $html_body = nl2br($body);

   $result = $ses->sendEmail(array(
    // Source is required
    'Source' => $email,
    // Destination is required
    'Destination' => array(
        'ToAddresses' => array($email),
    ),
    // Message is required
    'Message' => array(
        // Subject is required
        'Subject' => array(
            // Data is required
            'Data' => "$subject",
            'Charset' => 'utf-8',
        ),
        // Body is required
        'Body' => array(
            'Text' => array(
                // Data is required
                'Data' => "$body",
                'Charset' => 'utf-8',
            ),
            'Html' => array(
                // Data is required
                'Data' => "$html_body",
                'Charset' => 'utf-8',
            ),
        ),
    ),
    'ReplyToAddresses' => array($email),
    'ReturnPath' => $email,
));


}
