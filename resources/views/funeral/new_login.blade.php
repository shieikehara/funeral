<link rel="stylesheet" type="text/css" href="/css/style.css">

<body>
    <div id='login'>
        <p class='login_p'>新規会員登録</p>
        <form action="new_login_complete" method="post" class="new_loginform">
            @csrf
            <input type="text" name="name" placeholder="name" class="new_form"><br>
            @if ($errors->has('name'))
                <li class='error'>{{$errors->first('name')}}</li>
            @endif
            <input type="text" name="email" placeholder="mail address" class="new_form"><br>
            @if ($errors->has('email'))
                <li class='error'>{{$errors->first('email')}}</li>
            @endif
            <input type="text" name="tel" placeholder="tel" class="new_form"><br>
            @if ($errors->has('tel'))
                <li class='error'>{{$errors->first('tel')}}</li>
            @endif
            <input type="text" name="password" placeholder="password" class="new_form"><br>
            @if ($errors->has('password'))
                <li class='error'>{{$errors->first('password')}}</li>
            @endif
            <select name="funeral_id" class="new_form">
                @foreach($users as $user)
                    <option value='{{ $user->id }}'>{{ $user->family_name }}</option>
                @endforeach
            </select><br>
            <input type="submit" name="new_login" value="登録" class="login_button">
        </form>
    </div>
</body>