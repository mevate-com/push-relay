<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="margin:20px;font-family:'Arial',sans-serif">
<p>Hallo,<br></p>
<p>es gibt Neuigkeiten!
</p>
<p>
	<b> {{ payload.title }}</b><br>
    {{payload.body}}
</p>
<p>
	<small style="color:#666">Diese E-Mail wurde automatisiert versendet.</small>
</p>
<p>
	<small style="color:#666">
		Footer: <br>
		Footer Here.<br>
		And here. This is a Longer text
	</small>
</p>
<p>
	<small style="color:#666">
		<a href="https://tomaskostadinov.com/kontakt">Support kontaktieren</a>
	</small>
</p>
<p>
	<small style="color:#666">
		Sie können den Empfang solcher E-Mails in Ihrem Profil <a href="{{ optOutUrl }}">konfigurieren</a>
	</small>
</p>
</body>
</html>