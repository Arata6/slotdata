<x-app-layout>
    <h1>ホール一覧</h1>
           
    <div class='parlors'>
        @foreach ($parlors as $parlor)
            <div class='parlor'>
                <h2 class='name'>
                    <a href="/parlors/{{ $parlor->id }}">{{ $parlor->name }}</a>
                </h2>
                <p class='businessHours'>営業時間：{{ $parlor->businessHours }}</p>
                <p class='lottery'>グランドオープン日：{{ $parlor->lottery }}</p>
                <p class='adress'>住所：{{ $parlor->adress }}</p>
                <p class='lotteryTime'>抽選時間：{{ $parlor->lotteryTime }}</p>
                <p class='machine'>設置台数：{{ $parlor->machine }}</p>
                <p class='exchange'>換金率：{{ $parlor->exchange }}</p>
                <p class='recomendation'>おすすめ度（10段階）:{{ $parlor->recomendation }}</p> 
                
              
            </div>
        @endforeach
    </div>
    <div class='paginate'>
        {{ $parlors->links() }}
    </div>
    
     </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>