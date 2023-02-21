<link rel="stylesheet" type="text/css" href="/css/style.css">

<body>
    <div id='login'>
        <p class='login_p'>登録情報編集</p>
        <form action="{{ route('user') }}" method="post" class="loginform">
            @csrf
            <input type="text" name="login_mail" placeholder="name" class="form"><br>
            @if ($errors->has('login_mail'))
                <li class='error'>{{$errors->first('login_mail')}}</li>
            @endif
            <input type="text" name="login_password" placeholder="mail address" class="form"><br>
            @if ($errors->has('login_password'))
                <li class='error'>{{$errors->first('login_password')}}</li>
            @endif
            <input type="text" name="login_tel" placeholder="tel" class="form"><br>
            @if ($errors->has('login_tel'))
                <li class='error'>{{$errors->first('login_tel')}}</li>
            @endif
            <input type="submit" name="login_button" value="変更" class="login_button">
        </form>
    </div>
</body>