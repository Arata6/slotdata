<x-app-layout>
    <h1>編集画面</h1>
    <form action="/datas" method="POST">
        @csrf
        @method('PUT')
        <div class="name">
            <h2>日付</h2>
            <input type="text" name="data[date]" placeholder="　月　日" value="{{ old('data.date') }}"/>
        </div>
        <div class="event">
            <h2>イベント内容</h2>
            <input type="text" name="data[date]" placeholder="特定日" value="{{ old('data.date') }}"/>
        </div>
        <div class="participant">
            <h2>抽選参加人数</h2>
            <input type="text" name="data[event]" placeholder="抽選80人" value="{{ old('data.event') }}"/>
        </div>
        <div class="total">
            <h2>総差枚</h2>
            <input type="text" name="data[total]" placeholder="＋35000枚" value="{{ old('data.total') }}"/>
        </div>
        <div class="average">
            <h2>平均差枚</h2>
            <input type="text" name="data[average]" placeholder="＋210枚" value="{{ old('data.average') }}"/>
        </div>
        <div class="body">
            <h2>データ</h2>
            <input type="text" name="data[body]" placeholder="　111番台　＋4000枚　6000回転" value="{{ old('data.body') }}"/>
        </div>
        <input type="submit" value="保存"/>
    </form>
    <div class="footer">
        <a href="/datas/{{ $data->id }}">戻る</a>
    </div>
</x-app-layout>