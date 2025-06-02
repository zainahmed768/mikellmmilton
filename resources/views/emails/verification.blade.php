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

        .code {
            font-size: 24px;
            font-weight: bold;
            color: #1a73e8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello, {{ $user->name }}!</h1>
        <p>Thank you for registering. To complete your registration, please use the following verification code:</p>
        <p class="code">{{ $verificationCode }}</p>
    </div>
</body>

</html>
