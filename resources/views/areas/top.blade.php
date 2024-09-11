<x-app-layout>
    <head>
        <link rel="stylesheet" href="./css/TopBlade.css">
    </head>
    
    <h1 class='text-2xl' >長野パチスロデータまとめサイト</h1>
    <div class='areas'>
        @foreach ($areas as $area)
            <div class='area'>
                <h2 class='name text-xl text-blue-600 mt-5'>
                    <a href="/areas/{{ $area->id}}">{{ $area->name }}</a>
                </h2>
                <p class='text-xl'>{{ $area->name}}のホール情報を掲載</p>
            </div>
        @endforeach
    </div>
</x-app-layout>