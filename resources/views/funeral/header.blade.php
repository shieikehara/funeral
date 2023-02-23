@section('header')
<link rel="stylesheet" type="text/css" href="/css/header.css">


<header>
    @if(isset($user))
    <div id='title'>
        <a href="{{ route('menu') }}" class='menu'><i class="fa-solid fa-cloud"></i>Funeral Service</a>
        <div class='box1'>
            <a href="{{ route('mypage') }}?id={{ $id }}" class="mypage">マイページ</a>
            <a href="{{ route('logout') }}" class="signout" onclick="return confirm('サインアウトしますか？')">サインアウト</a>
        </div>
    </div>
    @endif
    @if(!isset($user))
    <div id='title'>
        <a href="{{ route('guest_menu') }}" class='menu'><i class="fa-solid fa-cloud"></i>Funeral Service</a>
    </div>
    @endif
</header>
@show