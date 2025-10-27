<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <a href="{{ route('reports.create') }}">Создание заявления</a>
    @foreach ($reports as $report)
    <p> {{ $report->number }} </p>
    <p> {{ $report->description }} </p>
    <p> {{ $report->created_at }} </p>
    <p> {{ $report->deleted_at }} </p>
    <form method="POST" action="{{route('reports.destroy', $report->id)}}">
        @method('delete')
        @csrf
        <input type="submit" value="Удалить">
    </form>
    <a href="{{route('reports.edit', $report->id)}}">Обновить</a>
    @endforeach
</body>
</html>