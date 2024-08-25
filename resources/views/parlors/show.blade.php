<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>parlors</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="name">
            {{ $parlor->name }}
        </h1>
        <h1 class="event">
            {{ $parlor->businessHours }}
        </h1>
        <h1 class="lottery">
            {{ $parlor->lottery }}
        </h1>
        <h1 class="adress">
            {{ $parlor->adress }}
        </h1>
        <h1 class="lotteryTime">
            {{ $parlor->lotteryTime }}
        </h1>
        <h1 class="machine">
            {{ $parlor->machine }}
        </h1>
        <h1 class="exchange">
            {{ $parlor->exchange }}
        </h1>
        <h1 class="recomendation">
            {{ $parlor->recomendation }}
        </h1>
        
        <div class="edit">
            <a href="/parlors/{{ $parlor->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>