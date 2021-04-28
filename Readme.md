# Push & Email Relay

This repository contains a php microservice handling push and email notifications.

# Configuration

To configure this microservice, create a `.env` file (see `.env.example`).

# Mail

Supported payload schemas:

---

- `mevate/login-code`

```json
{
  "schema": "mevate/login-code",
  "data": {
    "name": "Max",
    "link": "example.com/login/code/123",
    "codeUrl": "example.com/login/code",
    "code": "123"
  }
}
```

---

- `mevate/reset-password`

```json
{
  "schema": "mevate/reset-password",
  "data": {
    "name": "Max",
    "link": "example.com/login/reset/123"
  }
}
```

---

- `mevate/simple-mail`

```json
{
  "schema": "mevate/simple-mail",
  "data": {
    "name": "Max", 
    "content": "Hello <b>World</b>"
  }
}
```

---

- `mein-verein/event`

```json
{
  "schema": "mevate/login-code",
  "data": {
    "name": "Max", 
    "link": "example.com/login/code/123",
    "codeUrl": "example.com/login/code", 
    "code": "123"
  }
}
```

---

- `mein-verein/poll`

---

- `mein-verein/news`

---

# Push