<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        ФИО из сессии {{\Illuminate\Support\Facades\Session::get('fio')}}
    </p>
    <p>
        Пароль из сессии {{\Illuminate\Support\Facades\Session::get('password')}}
    </p>
<p>
    Имя сессии {{\Illuminate\Support\Facades\Session::getName()}}
</p>
    <p>
        Id сессии {{\Illuminate\Support\Facades\Session::getId()}}
    </p>
</body>
</html>
