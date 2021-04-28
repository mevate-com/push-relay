<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail(array $emails, string $from, string $title, string $body): bool {
	$mail = new PHPMailer(true);

	try {
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = $_ENV['SMTP_HOST'];
		$mail->Username = $_ENV['SMTP_USER'];
		$mail->Password = $_ENV['SMTP_PASSWORD'];
		$mail->Port = $_ENV['SMTP_PORT'];
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';

		// Recipients
		$mail->setFrom($from, 'Mevate');
		foreach ($emails as $email) {
			$mail->addBCC($email[0], $email[1]);
		}
		$mail->addReplyTo($from, 'Mevate');

		// Content
		$mail->isHTML(true);
		$mail->Subject = $title;
		$mail->Body = $body;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		return true;
	} catch (Exception $e) {
		jsonResponse(false, $e->getMessage());
		return false;
	}
}