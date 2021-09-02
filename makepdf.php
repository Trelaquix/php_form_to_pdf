<?php

require_once __DIR__ . '/vendor/autoload.php';


// Grab variables from index.php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create new PDF instance
$mpdf = new \Mpdf\Mpdf();


// Create our PDF
$data = '';

$data .= '<h1>Your Details</h1>';

// Adding data
$data .= '<strong>First Name</strong> '. $fname . '<br />';
$data .= '<strong>Last Name</strong> '. $lname . '<br />';
$data .= '<strong>Email</strong> '. $email . '<br />';
$data .= '<strong>Phone</strong> '. $phone . '<br />';

if($message)
{
    $data .= '<br /><strong>Message</strong><br />'. $message;
}

// Write PDF
$mpdf ->WriteHTML($data);

// Output to browser
$mpdf ->Output('newfile.pdf', 'D');