<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <style>
        * {
            font-family: 'Comfortaa', cursive;
        }
        .body {
            max-width: 570px;
            margin-left: auto;
            margin-right: auto;
            background-image: url("https://www.hdwallpapers.in/walls/apple_flowers-wide.jpg");
            background-size: cover;
        }

        .body-hover {
            max-width: 570px;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(26, 26, 26, 0.76);
            position: relative;
            z-index:998;
        }

        .header {
            position: relative;
            width: 570px;
            height: 40px;
            margin: 10px auto 10px auto;
            text-align: center;
            background-color: #dcdcdc;
            color: #1a1a1a;
            background-color: transparent;
        }

        .header a h1 {
            margin: 0px;
            position: relative;
            z-index:999;
        }

        .header a {
            text-decoration: underline;
            color: #f5ecff;
            position: relative;
            z-index:9999;
        }

        .footer {
            position: relative;
            width: 570px;
            height: 40px;
            margin: 10px auto 10px auto;
            text-align: center;
            background-color: #dcdcdc;
            color: #9f9f9f;
            background-color: transparent;
        }

        .footer p {
            margin: 0px;
        }

        .content {
            position: relative;
            margin: 20px auto 20px auto;
            background-color: #f4f4f4;
            color: #f5f5f5;
            height: 500px;
            width: 400px;
            text-align: left;
            padding: 5px 15px 5px 15px;
            background-color: transparent;
        }
        .col-6 {
            width: 50%;
            display: inline-block;
        }

        p {
            position: relative;
            z-index:999;
            color: #FFFFFF;
        }
        .im {
            color: #FFFFFF !important;
        }
    </style>
</head>
<body>

<div class="body">
    <div class="body-hover">
        <div class="header">
            <a href="http://fiesta/admin"><h1>Fiesta Flowers</h1></a>
        </div>

        <div class="content">
            <p class="im">Имя отправителя: {{ $name }}</p>
            <p class="im">Номер телефона: {{ $phone }}</p>

            <br>
            <hr>
            <br>

            <p><div class="col-6 im">Текст сообщения:</div></p>
            <p>
                <div class="col-12">
                    Здравствуйте! Уважаемый(ая) {{ $name }}, просит вас перезвонить
                    по номеру :{{ $phone }}.
                </div>
            </p>


        </div>

        <div class="footer">
            <p>&copy; Fiesta Flowers</p>
        </div>
    </div>
</div>

</body>
</html>