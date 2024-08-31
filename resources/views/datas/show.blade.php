<x-app-layout>
    <body>
        <a href="">{{ $data->parlor->name }}</a>
        <h1 class="date">
            {{ $data->date }}
        </h1>
        <h1 class="event">
            {{ $data->event }}
        </h1>
        <h1 class="participant">
            {{ $data->participant }}
        </h1>
        <h1 class="total">
            {{ $data->total }}
        </h1>
        <h1 class="average">
            {{ $data->average }}
        </h1>
        <h1 class="body">
            {{ $data->body}}
        </h1>
        
      
        <div class="edit">
            <a href="/datas/{{ $data->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/parlors/{{$data->parlor->id}}">戻る</a>
        </div>
    </body>
</x-app-layout>