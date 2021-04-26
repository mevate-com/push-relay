<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="margin:20px;font-family:'Arial',sans-serif">
<p>Hallo {% yield name %},<br></p>
<p>klicken Sie auf <a href="{% yield link %}">diesen Anmelde-Link</a>, um automatisch angemeldet zu werden.
</p>
<p>
    Alternativ können Sie auch unter <a href="{% yield codeUrl %}">{% yield codeUrl %}</a>
    den Anmelde-Code
<pre><code>{% yield code %}</code></pre>
eingeben, um angemeldet zu werden.
</p>
<p>
    <small style="color:#666">Diese E-Mail wurde von automatisch versendet. </small>
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