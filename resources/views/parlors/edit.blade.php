<x-app-layout>
    <h1>編集画面</h1>
    <div class="content">
        <form action="/parlors/{{ $parlor->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content__name">
                <h2>ホール名</h2>
                <input type="text" name="parlor[name]" placeholder="　ホール名" value="{{ old('parlor.name') }}"/>
            </div>
            <div class="content__businessHours">
                <h2>営業時間</h2>
                <input type="text" name="parlor[businessHours]" placeholder="9：00～23：00" value="{{ old('parlor.businessHours') }}"/>
            </div>
            <div class="content__lottery">
                <h2>グランドオープン日</h2>
                <input type="text" name="parlor[lottery]" placeholder="　現地抽選" value="{{ old('parlor.lottery') }}"/>
            </div>
            <div class="content__adress">
                <h2>住所</h2>
                <input type="text" name="parlor[adress]" placeholder="　長野県～" value="{{ old('parlor.adress') }}"/>
            </div>
            <div class="content__lotteryTime">
                <h2>抽選時間</h2>
                <input type="text" name="parlor[lotteryTime]" placeholder="　9：30抽選開始" value="{{ old('parlor.lotteryTime') }}"/>
            </div>
            <div class="content__machine">
                <h2>設置台数</h2>
                <input type="text" name="parlor[machine]" placeholder="　20円スロット400台" value="{{ old('parlor.machine') }}"/>
            </div>
            <div class="content__exchange">
                <h2>交換率</h2>
                <input type="text" name="parlor[exchange]" placeholder="　20円スロット：5.5枚交換" value="{{ old('parlor.exchange') }}"/>
            </div>
            <div class="content__recomendation">
                <h2>おすすめ度</h2>
                <input type="text" name="parlor[recomendation]" placeholder="　長野県～" value="{{ old('parlor.recomendation') }}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
    </div>
    <div class="footer">
        <a href="/parlors/{{ $parlor->id }}">戻る</a>
    </div>
</x-app-layout>