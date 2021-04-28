<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="margin:20px;font-family:'Arial',sans-serif">
<p>Hallo  {{ name }},<br></p>
<p>klicken Sie auf <a href=" {{ link }}">diesen Anmelde-Link</a>, um automatisch angemeldet zu werden.
</p>
<p>
    Alternativ können Sie auch unter <a href=" {{ codeUrl }}"> {{ codeUrl }}</a>
    den Anmelde-Code
<pre><code> {{ code }}</code></pre>
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