<x-app-layout>
    <h1>ホール投稿画面</h1>
    <a href='/parlors/create'>create</a>
    <div class='parlors'>
        @foreach ($parlors as $parlor)
            <div class='parlors'>
                <h2 class='name'>
                    <a href="/parlors/{{ $parlor->id }}">{{ $parlor->name }}</a>
                </h2>
                <a href="/areas/{{ $parlor->area->id }}">{{ $parlor->area->name }}</a>
                <p class='businessHours'>{{ $parlor->businessHours }}</p>
                <p class='lottery'>{{ $parlor->lottery }}</p>
                <p class='adress'>{{ $parlor->adress }}</p>
                <p class='lotteryTime'>{{ $parlor->lotteryTime }}</p>
                <p class='machine'>{{ $parlor->machine }}</p>
                <p class='exchange'>{{ $parlor->exchange }}</p>
                <p class='recomendation'>{{ $parlor->recomendation }}</p> 
                <div class="edit">
                     <a href="/parlors/{{ $parlor->id }}/edit">edit</a>
                </div>
                <form action="/parlors/{{ $parlor->id }}" id="form_{{ $parlor->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteParlor({{ $parlor->id }})">delete</button> 
                </form>
            </div>
        @endforeach
    </div>
    
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
</x-app-layout>