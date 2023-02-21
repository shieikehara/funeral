<link rel="stylesheet" type="text/css" href="/css/style.css">

<body>
    <p class='p'><i class="fa-solid fa-cloud cloud"></i></p>
    <p class='p_complete'>Thank you</p>
    @if(!empty($id))
    <div class="button1">
        <a href="{{ route('menu') }}">メニュー画面に戻る</a>
    </div>
    @endif
    @if(empty($id))
    <div class="button1">
        <a href="{{ route('guest_menu') }}">メニュー画面に戻る</a>
    </div>
    @endif
    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
</body>