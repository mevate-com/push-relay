<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="margin:20px;font-family:'Arial',sans-serif">
<p>Guten Tag,<br></p>
{% if not payload.isSystemDefaultForNewUser %}
<p>
    klicken Sie auf <a href=" {{ payload.link }}">diesen Link</a>, um Ihre E-Mail-Benachrichtigungseinstellungen zu speichern.
    Sollten Sie keine Änderungen vornehmen wollen, so können Sie diese E-Mail ignorieren.
</p>
{% endif %}
{% if payload.isSystemDefaultForNewUser %}
<p>
    wir haben Ihre E-Mail-Benachrichtigungseinstellungen konfiguriert.
</p>
{% endif %}
<p>
    Sie können den Empfang von E-Mails jederzeit <a href="{{ payload.optOutUrl }}">in Ihrem Profil</a> ändern.
</p>
<p><b>Folgende Einstellungen wurden konfiguriert:</b></p>
<p>
    Benachrichtigungen zu Aktivitäten wie Neuigkeiten, Veranstaltungen: <b>{{payload.activity_notifications_enabled? 'Aktiviert': 'Deaktiviert'}}</b>
</p>
<p>
    Sicherheits-Aktivitäten wie Logins auf neuen Geräten, Verleihen von Berechtigungen, Hinzufügen zu Teams: <b>{{payload.security_notifications_enabled? 'Aktiviert': 'Deaktiviert'}}</b>
</p>
<p>
    Neue Funktionen und Angebote auf der Plattform: <b>{{payload.update_notifications_enabled? 'Aktiviert': 'Deaktiviert'}}</b>
</p>
<p>
    <small style="color:#666">Diese E-Mail wurde von automatisiert versendet. </small>
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
</body>
</html>