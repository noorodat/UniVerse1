<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniVerse</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            margin-bottom: 10px;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        h4 a {
            color: #007bff;
            text-decoration: none;
        }

        h5 {
            margin-top: 10px;
        }

        h3 {
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
        }

        footer {
            margin-top: 20px;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>UniVerse</h1>
        <hr>
        <h5>From: {{ $data['name'] }}</h5>
        <h2>Subject: {{ $data['subject'] }}</h2>
        <h4><a href="mailto:{{$data['email']}}">Email : {{$data['email']}}</a></h4>
        <p>{{ $data['body'] }}</p>
        <footer>
            <div>Contact:</div>
            <div>
                <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
            </div>
            <div>
                <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
            </div>
        </footer>
    </div>
</body>

</html>
