<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>投稿画面</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="day">
                <h2>日付</h2>
                <input type="text" name="post[day]" placeholder="　月　日" value="{{ old('post.day') }}"/>
            </div>
            <div class="event">
                <h2>イベント</h2>
                <input type="text" name="post[event]" placeholder="イベント内容" value="{{ old('post.event') }}"/>
            </div>
            <div class="participant">
                <h2>抽選参加人数</h2>
                <input type="text" name="post[participant]" placeholder="　人" value="{{ old('post.participant') }}"/>
            </div>
            <div class="pickup">
                <h2>優秀台</h2>
                <textarea name="post[pickup]" placeholder="　番台　総回転数　回　差枚　＋枚" value="{{ old('post.pickup') }}"></textarea>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>