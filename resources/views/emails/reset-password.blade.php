<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #333333;
        }

        p {
            color: #555555;
        }

        a.button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #1a73e8;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
        }

        a.button:hover {
            background-color: #155cb0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello, {{ $user->name }}!</h1>
        <p>You are receiving this email because we received a password reset request for your account.</p>
        <p>To reset your password, click the button below:</p>
        <a href="{{ 'https://landj.developer-ourbase-camp.com/#/new-password?token=' . $token . '&email=' . urlencode($user->email) }}"
            class="button">
            Reset Password
        </a>
        <p>This password reset link will expire in 60 minutes.</p>
        <p>If you did not request a password reset, no further action is required.</p>
    </div>
</body>

</html>
