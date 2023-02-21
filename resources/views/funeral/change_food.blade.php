<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    <div id='change_food'>
        <div class='titleicon'>
            <i class="fa-solid fa-utensils fa-2x"></i><p class='menu_title'>料理数変更</p>
        </div>
        @if($user->admin == 0)
            <form action="complete/change_food" method="post" class="loginform">
                @csrf
                @foreach($detail as $deta)
                <input type="hidden" name="id" value="{{ $deta->id }}">
                <input type="text" name="change_day1" placeholder="通夜" value="{{ $deta->dinner }}" class="form"><br>
                <input type="text" name="change_day2" placeholder="忌中" value="{{ $deta->lunch }}" class="form"><br>
                @endforeach
                <input type="submit" name="change_food" value="変更" class="login_button">
            </form>
        @endif
        @if($user->admin == 1)
            @foreach($f_funeral as $f)
            <div class='titleicon'>
                <p class='menu_title'>{{ $f->deceased }}様</p>
            </div>
            <form action="complete/change_food" method="post" class="loginform">
                @csrf                
                <input type="hidden" name="id" value="{{ $f->id }}">
                <input type="text" name="change_day1" placeholder="通夜" value="{{ $f->dinner }}" class="form"><br>
                <input type="text" name="change_day2" placeholder="忌中" value="{{ $f->lunch }}" class="form"><br>
                <input type="submit" name="change_food" value="変更" class="login_button">
            </form>
            @endforeach
        @endif
    </div>

    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
</body>
@include('funeral.footer')
