<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    @if($user->admin == 0)
        @foreach($details as $detail)
        <div id='change_food'>
            <div class='titleicon'>
                <i class="fa-solid fa-pen-nib fa-2x"></i><p class='menu_title'>葬儀詳細</p>
            </div>
            <div class='detail'>
                <p class='detail_p'>葬家名</p>
                <p class='detail_p'>{{ $detail->family_name }}</p>
            </div>
            <div class='detail'>
                <p class='detail_p'>故人名</p>
                <p class='detail_p'>{{ $detail->deceased }}</p>
            </div>
            <div class='detail'>
                <p class='detail_p'>喪主名</p>
                <p class='detail_p'>{{ $detail->name }}</p>
            </div>
            <div class='detail'>
                <p class='detail_p'>通夜日時</p>
                <p class='detail_p'>{{ $detail->day1 }}</p>
            </div>
            <div class='detail'>
                <p class='detail_p'>葬儀日時</p>
                <p class='detail_p'>{{ $detail->day2 }}</p>
            </div>
            <div class='detail'>
                <p class='detail_p'>葬儀形式</p>
                <p class='detail_p'>{{ $detail->funeral_style }}</p>
            </div>
            <div class="button3">
                <a href="{{ route('menu') }}">メニュー画面に戻る</a>
            </div>
        </div>
        @endforeach
    @endif
    @if($user->admin == 1)
        @foreach($all_details as $all)
            <div id='change_food'>
                <div class='titleicon'>
                    <i class="fa-solid fa-pen-nib fa-2x"></i><p class='menu_title'>葬儀詳細</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>葬家名</p>
                    <p class='detail_p'>{{ $all->family_name }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>故人名</p>
                    <p class='detail_p'>{{ $all->deceased }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>喪主名</p>
                    <p class='detail_p'>{{ $all->name }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>通夜日時</p>
                    <p class='detail_p'>{{ $all->day1 }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>葬儀日時</p>
                    <p class='detail_p'>{{ $all->day2 }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>葬儀形式</p>
                    <p class='detail_p'>{{ $all->funeral_style }}</p>
                </div>
            </div>
        @endforeach
        <div class="admin">
            <div class="button4">
                <a href="{{ route('menu') }}">メニュー画面に戻る</a>
            </div>    
        </div>
    @endif
    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
</body>
@include('funeral.footer')
