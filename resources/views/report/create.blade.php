<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Создание заявки</h1>
    <form method="POST" action="{{route('report.store')}}">
        @csrf
        <input name="number" placeholder="Введите номер автомобиля"/>
        <textarea name="description" placeholder="Введите описание правонарушения"></textarea>
        <input type="submit" value="Создать">
    </form>
</body>
</html>