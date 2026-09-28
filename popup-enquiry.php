<?php
// popup-enquiry.php : receives the popup form and emails it to you.
// 1) Put the email address that should receive enquiries below.
$to = 'youremail@example.com';

header('Content-Type: application/json');

$clean = function ($key) {
    return trim(strip_tags($_POST[$key] ?? ''));
};

// Only accept POST, and ignore bots that fill the hidden "website" field
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !empty($_POST['website'])) {
    echo json_encode(['ok' => false]);
    exit;
}

$name    = $clean('name');
$email   = $clean('email');
$phone   = $clean('phone');
$message = $clean('message');

if (strlen($name) < 2 || !preg_match('/^[6-9][0-9]{9}$/', $phone) || ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL))) {
    echo json_encode(['ok' => false, 'error' => 'Please check your details.']);
    exit;
}

$body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message\n";

$headers  = 'From: Website Enquiry <no-reply@' . preg_replace('/[^a-z0-9.\-]/i', '', $_SERVER['SERVER_NAME'] ?? 'localhost') . ">\r\n";
if ($email !== '') {
    $headers .= "Reply-To: $email\r\n";
}

$sent = @mail($to, 'New enquiry from website popup', $body, $headers);

echo json_encode(['ok' => (bool) $sent]);
