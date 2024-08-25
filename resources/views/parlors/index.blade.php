<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ホール投稿画面</h1>
        <h2></h2>
        <div class='parlors'>
            @foreach ($parlors as $parlor)
                <div class='parlor'>
                    <h2 class='name'>
                        <a href="/parlors/{{ $parlor->id }}">{{ $parlor->name }}</a>
                    </h2>
                    <p class='businessHours'>{{ $parlor->businessHours }}</p>
                    <p class='lottery'>{{ $parlor->lottery }}</p>
                    <p class='adress'>{{ $parlor->adress }}</p>
                    <p class='lotteryTime'>{{ $parlor->lotteryTime }}</p>
                    <p class='machine'>{{ $parlor->machine }}</p>
                    <p class='exchange'>{{ $parlor->exchange }}</p>
                    <p class='recomendation'>{{ $parlor->recomendation }}</p> 
                    <form action="/parlors/{{ $parlor->id }}" id="form_{{ $parlor->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteParlor({{ $parlor->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <a href='/parlors/create'>create</a>
        <div class='paginate'>
            {{ $parlors->links() }}
        </div>
        <script>
            function deleteParlor(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>