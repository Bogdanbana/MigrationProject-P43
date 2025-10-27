<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('reports.update', $report->id)}}">
        @csrf
        @method('put')
        <input name="number" value="{{$report->number}}">
        <textarea name="description">{{$report->description}}</textarea>
        <input type="submit" value="Обновить">
    </form>
</body>
</html>