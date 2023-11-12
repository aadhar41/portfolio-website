<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mailData['subject'] }}</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
        <header style="background-color: #ff885e; padding: 20px; text-align: center; color: #fff;">
            <h1>{{ config('app.name') }}</h1>
        </header>

        <div style="padding: 20px;">
            <h2><b>Subject : </b>{{ $mailData['subject'] }}</h2>
            <p><b>Name : </b>{!! $mailData['name'] !!}</p>
            <p><b>E-Mail : </b>{!! $mailData['email'] !!}</p>
            <p><b>Message : </b>{!! $mailData['message'] !!}</p>
        </div>

        <footer style="background-color: #f4f4f4; padding: 10px; text-align: center; color: #777;">
            &copy; {{ date('Y') }} {{ config('app.name') }}
        </footer>
    </div>
</body>
</html>