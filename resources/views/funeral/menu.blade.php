<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    @if(isset($user))
        <div class='funeral'>
            <a href="{{ route('funeral') }}?id={{ $user->funeral_id }}"><i class="fa-solid fa-pen-nib funeralicon"></i></a>
            <a href="{{ route('change_food') }}?id={{ $user->funeral_id }}"><i class="fa-solid fa-utensils funeralicon"></i></a>
            <a href="{{ route('flower') }}?id={{ $id }}"><i class="fa-solid fa-leaf funeralicon"></i></a>
            <a href="{{ route('form') }}"><i class="fa-regular fa-envelope funeralicon"></i></a>
            @if($user->admin == 1)
                <a href="{{ route('new_funeral') }}"><i class="fa-solid fa-desktop funeralicon"></i></a>
            @endif
        </div>
        <div class='funeral1'>
            <p class='p2'>葬儀詳細</p>
            <p class='p2'>料理数変更</p>
            <p class='p2'>生花・供物注文</p>
            <p class='p2'>お問い合わせ</p>
            @if($user->admin == 1)
                <p class='p2'>葬儀詳細登録</p>
            @endif
        </div>
        <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
    @endif
    @if(!isset($user))
        <div class='funeral'>
            <a href="{{ route('flower') }}"><i class="fa-solid fa-leaf funeralicon"></i></a>
            <a href="{{ route('form') }}"><i class="fa-regular fa-envelope funeralicon"></i></a>
        </div>
        <div class='funeral1'>
            <p class='p2'>生花・供物注文</p>
            <p class='p2'>お問い合わせ</p>
        </div>
        <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
    @endif
</body>
@include('funeral.footer')

