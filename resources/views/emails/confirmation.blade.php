<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Confirmation | {{config('app.name', 'Cartavel')}}</title>
  </head>
  <body>
    <h1>Thank you for signing up to {{config('app.name', 'Cartavel')}}!</h1>
    <p>
      Please <a href='{{url("register/confirm/{$user->token}")}}'>Confirm your email address</a> to continue.
    </p>
    <p>
      Regards, <br>
      {{config('app.name', 'Cartavel')}}
    </p>
  </body>
</html>
