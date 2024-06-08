<?php
$now = new DateTime();
print $now->format('Y-m-d H:i:s');

$transport = Swift_SmtpTransport::newInstance('mailsv.example.com', 25);
$mailer = Swift_Mailer::newInstance($transport);
