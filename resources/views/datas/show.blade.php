<x-app-layout>
    <body>
        <h1 class="date text-xl">
            {{ $data->date }} {{ $data->parlor->name }}店 データまとめ
        </h1>
        <h1 class="event">
           イベント内容：{{ $data->event }}
        </h1>
        <h1 class="participant">
            抽選参加人数：{{ $data->participant }}
        </h1>
        <h1 class="total">
            総差枚：{{ $data->total }}
        </h1>
        <h1 class="average">
            平均差枚：{{ $data->average }}
        </h1>
        <h1>データ</h1>
        <h1 class="body">
            {{ $data->body}}
        </h1>
        
      
        <div class="edit">
            <a href="/datas/{{ $data->id }}/edit">edit</a>
        </div>
        <div class="footer text-blue-600">
            <a href="/parlors/{{$data->parlor->id}}">戻る</a>
        </div>
    </body>
</x-app-layout>
