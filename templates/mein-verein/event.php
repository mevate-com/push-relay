<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body style="margin:20px;font-family:'Arial',sans-serif">
<p>Hallo {% yield name %},<br></p>
<p>es wurde eine neue Veranstaltung erstellt!
</p>
<p>
	<b>{% yield Title %}</b><br>
    {% yield description %}
</p>
<p>
	<small style="color:#666">Diese E-Mail wurde von automatisch versendet.</small>
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
		Sie können den Empfang solcher E-Mails in Ihrem Profil <a href="{% yield configureEmailUrl %}">konfigurieren</a>
	</small>
</p>
</body>
</html>