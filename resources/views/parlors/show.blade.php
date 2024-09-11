<x-app-layout>
    <h1 class="name text-2xl">
        {{ $parlor->name }}
    </h1>
    <h1 class="event">
        営業時間：{{ $parlor->businessHours }}
    </h1>
    <h1 class="adress">
       住所： {{ $parlor->adress }}
    </h1>
    <h1 class="lottery">
       グランドオープン日： {{ $parlor->lottery }}
    </h1>
    <h1 class="lotteryTime">
       抽選時間： {{ $parlor->lotteryTime }}
    </h1>
    <h1 class="machine">
       設置台数： {{ $parlor->machine }}
    </h1>
    <h1 class="exchange">
        換金率：{{ $parlor->exchange }}
    </h1>
    <h1 class="recomendation">
        おすすめ度（10段階）：{{ $parlor->recomendation }}
    </h1>
    <p> </p>
    
    
    <h1>データ一覧</h1>
    
    <div class='datas'>
        @foreach ($datas as $data)
            <div class='data'>
                <h2 class='date text-blue-600'>
                    <a href="/datas/{{ $data->id }}">{{ $data->date }}</a>
                </h2>
                <p class='event'>イベント内容：{{ $data->event }}</p>
                <p class='participant'>抽選参加人数：{{ $data->participant }}</p>
                <p class='totla'>総差枚：{{ $data->total }}</p>
                <p class='average'>平均差枚：{{ $data->average }}</p>
            </div>
        @endforeach
    </div>
    <div class="footer text-blue-600">
        <a href="/areas/{{$parlor->area->id}}">戻る</a>
    </div>
</x-app-layout>
    