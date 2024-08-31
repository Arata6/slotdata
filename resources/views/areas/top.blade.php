<x-app-layout>
    <head>
        <link rel="stylesheet" href="./css/TopBlade.css">
    </head>
    
    <h1>長野パチスロ　データサイト</h1>
    <div class='areas'>
        @foreach ($areas as $area)
            <div class='area'>
                <h2 class='name'>
                    <a href="/areas/{{ $area->id}}">{{ $area->name }}</a>
                </h2>
                <p>{{ $area->name}}のホール情報を掲載</p>
            </div>
        @endforeach
    </div>
</x-app-layout>