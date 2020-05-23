<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Hello/Index</h1>
    <p>{!! $msg !!}</p>
    <ul>
        @foreach($data as $item)
        <li>{!! $item !!}</li>
        @endforeach
    </ul>
    <p><a href="/hello/other">download</a></p>
    <form action="/hello/other" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button>送信</button>
    </form>
</body>
</html>