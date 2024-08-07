<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="day">
            {{ $post->day }}
        </h1>
        <h1 class="event">
            {{ $post->event }}
        </h1>
        <h1 class="participant">
            {{ $post->participant }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>優秀台</h3>
                <p>{{ $post->pickup }}</p>    
            </div>
        </div>
        <div class="edit">
            <a href="/post/{{ $post->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>