<x-app-layout>
    <h1　class='text-2xl'>データ入力画面</h1>
    <h1 class='text-blue-600'>
        <a href='/datas/create'>create</a>
    </h1>
    <div class='datas'>
        @foreach ($datas as $data)
            <div class='data'>
                <a href="/parlors/{{ $data->parlor->id }}">{{ $data->parlor->name }}</a>
                <h2 class='date text-blue-600'>
                    <a href="/datas/{{ $data->id }}">{{ $data->date }}</a>
                </h2>
                <p class='event'>{{ $data->event }}</p>
                <p class='participant'>{{ $data->participant }}</p>
                <p class='totla'>{{ $data->total }}</p>
                <p class='average'>{{ $data->average }}</p>
                <p class='body'>{{ $data->body }}</p>
                <form action="/datas/{{ $data->id }}" id="form_{{ $data->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletedata({{ $data->id }})">delete</button> 
                </form>
            </div>
        @endforeach
    </div>
    
    <div class='paginate'>
        {{ $datas->links() }}
    </div>
    <script>
        function deletedata(id) {
            'use strict'
    
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
    <a href="/">戻る</a>
</x-app-layout>