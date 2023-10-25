<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }

    h1 {
        color: red;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: red;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }

    .links {
        display: flex;
        justify-content: space-around;
    }

    .links a {
        border-radius: 5px;
        display: inline-block;
        height: 60px;
        line-height: 60px;
        color: white;
        background: #525fe1;
        padding: 0 20px;
        font-size: 18px;
        font-weight: 700;
        transition: 0.4s;
        border: 0 none;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif
    }
</style>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">X</i>
        </div>
        <h1>Failure</h1>
        <p>Failure<br /> Some error happened while paying!</p>
        <br>
        <br>
        <div class="links">
            <a href="{{ route('go-home') }}">Home</a>
            <a href="{{ route('go-profile', Auth::user()) }}">Profile</a>
        </div>
    </div>
</body>

</html>
