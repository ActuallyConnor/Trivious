#Trvious

API authentication is handled the standard “out of the box” Laravel way as seen here - https://laravel.com/docs/6.x/api-authentication.

API keys are hashed using SHA-256. In config/auth.php

```
'api' => [
    'driver' => 'token',
    'provider' => 'users',
    'hash' => true,
],
```

When a user makes a request to initialize or refresh their token, it will store a hashed copy of the token in the database, and return the plain-text copy of token to the view/frontend client for one-time display.

