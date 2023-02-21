<link rel="stylesheet" type="text/css" href="/css/style.css">

<body>
    <div id='login'>
        <p class='login_p'>パスワード変更</p>
        <form action="{{ route('pass') }}" method="post" class="loginform">
            @csrf
            <input type="text" name="email" placeholder="mail address" class="form"><br>
            @if ($errors->has('change_mail'))
                <li class='error'>{{$errors->first('change_mail')}}</li>
            @endif
            <input type="text" name="password" placeholder="new password" class="form"><br>
            @if ($errors->has('change_password'))
                <li class='error'>{{$errors->first('change_password')}}</li>
            @endif
            <input type="submit" name="change_button" value="変更" class="login_button">
        </form>
    </div>
</body>