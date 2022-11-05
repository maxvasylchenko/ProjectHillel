<!doctype html>
<html lang ="ru">
<head>
    <title> Register </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<form action ="" method="POST">
    <div class = "form-group">
        <label for = "name">Name</label>
        <input type = "text" class = "form-control" name = "first_name" id = "name" placeholder = "Введите свое имя">
    </div>
    <div class = "form-group">
        <label for = "email">Email</label>
        <input type = "email" class = "form-control" name = "email" id = "email" placeholder = "name@example.com">
    </div>
    <div class = "form-group">
        <label for = "phone">Телефон</label>
        <input type = "phone" class = "form-control" name = "phone" id = "phone" placeholder = "+38(099)999-99-99">
    </div>
    <div class = "form-group">
        <label for = "password">Password</label>
        <input type = "password" class = "form-control" name = "password" id = "password" placeholder = "пароль">
    </div>
    <button type="submit">Отправить</button>
</form>
</body>
</html>