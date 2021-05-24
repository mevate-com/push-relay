<?php

require __DIR__ . "/_init.php";
require __DIR__ . "/helper/send-mail.php";


$payload = param("payload");
$schema = param("schema");
$recipients = param("recipients");
if(!$payload || !$schema || !$recipients) {
	jsonResponse(false, ["error" => "Please supply all needed data"]);
}
try {

	$payload = json_decode($payload);

	$loadedRecipients = [];
	foreach ($recipients as $recipientData) {
		$temp = json_decode($recipientData);
		array_push($loadedRecipients, [$temp->email, $temp->name]);
	}
	$title = "Neue Nachricht";
	switch ($schema) {
		case "mevate/reset-password":
			$title = "Ihr Passwort wurde zurückgesetzt";
			$content = $twig->render('reset-password.php', ["payload" => $payload]);
			break;
		case "mevate/login-code":
			$title = "Ihr Anmelde-Link";
			$content = $twig->render('login-code.php', ["payload" => $payload]);
			break;
		case "mein-verein/event":
			$title = "Neue Veranstaltung: {$payload->title}";
			$content = $twig->render('mein-verein/event.php', ["payload" => $payload]);
			break;
		case "mein-verein/poll":
			$title = "Neue Umfrage: {$payload->title}";
			$content = $twig->render('mein-verein/poll.php', ["payload" => $payload]);
			break;
		case "mein-verein/news":
			$title = "Es gibt Neuigkeiten: {$payload->title}";
			$content = $twig->render('mein-verein/news.php', ["payload" => $payload]);
			break;
		case "mein-verein/membership":
			$title = "Sie wurden zu einem Team hinzugefügt";
			$content = $twig->render('mein-verein/membership.php', ["payload" => $payload]);
			break;
		case "mein-verein/role-assignment":
			$title = "Sie wurden zu einer Berechtigungsrolle hinzugefügt";
			$content = $twig->render('mein-verein/role-assignment.php', ["payload" => $payload]);
			break;
		case "mein-verein/user":
			$title = "Ein Benutzer ist Ihrer Organisation beigetreten";
			$content = $twig->render('mein-verein/user.php', ["payload" => $payload]);
			break;
		case "mevate/confirm-email-subscription":
			$title = "Bestätigen Sie Ihre E-Mail-Einstellungen";
			$content = $twig->render('confirm-email-subscription.php', ["payload" => $payload]);
			break;
		default:
		case "mevate/simple-mail":
			$title = $payload->title !== null ? $payload->title : "";
			$content = $twig->render('simple-mail.php', ["payload" => $payload]);
			break;
	}
	sendMail($loadedRecipients, $_ENV['SMTP_USER'], $title, $content);
} catch (Error $error) {
	jsonResponse(false, ["error" => $error]);
}
