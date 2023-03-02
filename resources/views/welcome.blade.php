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
    <form action="{{route('sendForm')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ФИО</label>
            <input type="text" name="fio" required value="Сергей">
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="email" name="email" required value="Sergey@gmail.com">
        </div>
        <div class="form-group">
            <label for="">Пароль</label>
            <input type="password" name="password" required value="root">
        </div>
        <div class="form-group">
            <label for="">Повтор пароля</label>
            <input type="password" name="password_confirmation" required value="root">
        </div>
        <div class="form-group">
            <input type="checkbox" name="is_agree">
            <label for="">Я принимаю пользовательское соглашение</label>
        </div>
        <button type="submit">
            Зарегестрироваться
        </button>
    </form>
</body>
</html>
