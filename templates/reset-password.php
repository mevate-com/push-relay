<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="margin:20px;font-family:'Arial',sans-serif">
<p>Hallo {% yield name %},<br>
    klicken Sie auf  <a href="{% yield link %}">diesen Anmelde-Link</a>, um Ihr Kennwort zurückzusetzen.
</p>
<p>
    Ignorieren Sie diese E-Mail, wenn das Kennwort nicht geändert werden soll.
</p>
<p>
    <small style="color:#666">Diese E-Mail wurde von {System} versendet.</small>
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