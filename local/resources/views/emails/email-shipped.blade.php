<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header {
            position: absolute;
            width: 570px;
            height: 100px;
            margin: 10px;
            text-align: center;
            background-color: #cccccc;
            color: #1a1a1a;
        }
        .content {
            position: absolute;
            margin: 5px 20px 20px 5px;
            background-color: #cccccc;
            color: #1a1a1a;
            height: 500px;
            width: 570px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="header">
        <a href="http://fiesta/">{{ config('app.name') }}</a>
    </div>

    <div class="content">
        <p></p>
    </div>

</body>
</html>