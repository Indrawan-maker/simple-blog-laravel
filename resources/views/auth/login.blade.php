<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="/login">
        @csrf
    <label for="">masukan email</label>
    <input type="email" name="email">
    <label for="">masukkan password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
    </form>
</body>
</html>