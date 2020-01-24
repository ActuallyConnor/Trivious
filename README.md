#Trvious

##API Authentication
API authentication is handled the standard “out of the box” Laravel way as seen here - [API Authentication](https://laravel.com/docs/6.x/api-authentication)

API keys are hashed using SHA-256. In `config/auth.php`

```
'api' => [
    'driver' => 'token',
    'provider' => 'users',
    'hash' => true,
],
```

When a user makes a request to initialize or refresh their token, it will store a hashed copy of the token in the database, and return the plain-text copy of token to the view/frontend client for one-time display.

###Passing Tokens In Request

There are several ways of passing the API token to your application. We'll discuss each of these approaches while using the Guzzle HTTP library to demonstrate their usage. You may choose any of these approaches based on the needs of your application.

####Query String

Your application's API consumers may specify their token as an api_token query string value:

`$response = $client->request('GET', '/api/user?api_token='.$token);`

####Request Payload

Your application's API consumers may include their API token in the request's form parameters as an api_token:

```
$response = $client->request('POST', '/api/user', [
       'headers' => [
           'Accept' => 'application/json',
       ],
       'form_params' => [
           'api_token' => $token,
       ],
   ]);
```

####Bearer Token

Your application's API consumers may provide their API token as a Bearer token in the Authorization header of the request:

```
$response = $client->request('POST', '/api/user', [
    'headers' => [
        'Authorization' => 'Bearer '.$token,
        'Accept' => 'application/json',
    ],
]);
```

##Authorization
Yet to be implemented since there is no administrator level privileges required for any actions. If there is a need to add a `POST` functionality so that certain people may add new questions to the database it can be reviewed then. Please see [Laravel Authorization](https://laravel.com/docs/6.x/authorization) for more information as to how to implement.
