<link rel="stylesheet" type="text/css" href="/css/style.css">

<body>
    <div id='login'>
        <p class='login_p'>Login</p>
        <form action="{{ route('user_menu') }}" method="post" class="loginform">
            @csrf
            <input type="text" name="email" placeholder="mail address" class="form"><br>
            @if ($errors->has('email'))
                <li class='error'>{{$errors->first('email')}}</li>
            @endif
            <input type="password" name="password" placeholder="password" class="form"><br>
            @if ($errors->has('password'))
                <li class='error'>{{$errors->first('password')}}</li>
            @endif
            <input type="submit" name="login_button" value="Login" class="login_button">
        </form>
        <div class='change_pass'>
            <a href='change_pass'>change password</a>
        </div>
    </div>
</body>