<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo show</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル: {{$article->title}}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
</body>
</html>
