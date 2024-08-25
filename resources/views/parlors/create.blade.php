<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>投稿画面</h1>
        <form action="/parlors" method="post">
            @csrf
            <div class="name">
                <h2>ホール名</h2>
                <input type="text" name="parlor[name]" placeholder="　ホール名" value="{{ old('parlor.name') }}"/>
            </div>
            <div class="businessHours">
                <h2>営業時間</h2>
                <input type="text" name="parlor[businessHours]" placeholder="9：00～23：00" value="{{ old('parlor.businessHours') }}"/>
            </div>
            <div class="lottery">
                <h2>抽選方法</h2>
                <input type="text" name="parlor[lottery]" placeholder="　現地抽選" value="{{ old('parlor.lottery') }}"/>
            </div>
            <div class="adress">
                <h2>住所</h2>
                <input type="text" name="parlor[adress]" placeholder="　長野県～" value="{{ old('parlor.adress') }}"/>
            </div>
            <div class="lotteryTime">
                <h2>抽選時間</h2>
                <input type="text" name="parlor[lotteryTime]" placeholder="　9：30抽選開始" value="{{ old('parlor.lotteryTime') }}"/>
            </div>
            <div class="machine">
                <h2>設置台数</h2>
                <input type="text" name="parlor[machine]" placeholder="　20円スロット400台" value="{{ old('parlor.machine') }}"/>
            </div>
            <div class="exchange">
                <h2>交換率</h2>
                <input type="text" name="parlor[exchange]" placeholder="　20円スロット：5.5枚交換" value="{{ old('parlor.exchange') }}"/>
            </div>
            <div class="recomendation">
                <h2>おすすめ度</h2>
                <input type="text" name="parlor[recomendation]" placeholder="　長野県～" value="{{ old('parlor.recomendation') }}"/>
            </div>
            <div class="area">
            <h2>Area</h2>
            <select name="parlor[area_id]">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                @endforeach
            </select>
</div>
            
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>