<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    <div id='change_food'>
        <div class='titleicon'>
            <i class="fa-regular fa-envelope fa-2x"></i><p class='menu_title'>お問い合わせ</p>
        </div>
        <form action="complete/form" method="post" class="loginform">
            @csrf
            <input type="text" name="name" placeholder="name" class="form"><br>
            @if ($errors->has('name'))
                <li class='error'>{{$errors->first('name')}}</li>
            @endif
            <input type="text" name="tel" placeholder="tel" class="form"><br>
            @if ($errors->has('tel'))
                <li class='error'>{{$errors->first('tel')}}</li>
            @endif
            <input type="text" name="mail" placeholder="mail address" class="form"><br>
            @if ($errors->has('mail'))
                <li class='error'>{{$errors->first('mail')}}</li>
            @endif
            <textarea type="text" name="body" placeholder="問い合わせ内容" class="form_body" rows="10"></textarea><br>
            @if ($errors->has('body'))
                <li class='error'>{{$errors->first('body')}}</li>
            @endif
            <input type="submit" name="send" value="送信" class="login_button">
        </form>
    </div>

    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
</body>
@include('funeral.footer')
