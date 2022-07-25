
<?php

    $to = "spn1@spondonit.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['fname'];
    $headers = "Content-type: text/html;From: $from";
    $subject = $_REQUEST['subject'];

    $fields = array();
    $fields{"name"} = "name";
    $fields{"name2"} = "name2";
    $fields{"email"} = "email";
    $fields{"web"} = "web";
    $fields{"phone"} = "phone";
    $fields{"message"} = "message";

    $body = "Here is what was sent:\n\n";
	$body .= 'First Name : '.$fields['fname']. '<br>';
	$body .= 'Email : '.$fields['email']. '<br>';
	$body .= 'Subject : '.$fields['subject']. '<br>';
	$body .= 'Message : '.$fields['message']. '<br>';

    $send = mail($to, $subject, $body, $headers);
?>
