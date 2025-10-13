<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container">
            <div class="main_menu">
                @foreach($reports as $report)
                <p>{{$report->number}}</p>
                <p>{{$report->description}}</p>
                <p>{{$report->created_at}}</p>
                @endforeach
            </div>
            <a href="{{route('report.create')}}">Создание запроса</a>
        </div>
    </header>
    <body></body>
    <footer></footer>
</body>
</html>