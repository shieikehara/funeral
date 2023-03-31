<link rel="stylesheet" type="text/css" href="/css/form.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@include('funeral.header')
<body>
    @if(!isset($user))
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
    @endif
    @if(isset($user) && $user->admin == 0)
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
    @endif
    @if(isset($user) && $user->admin == 1)
        @foreach($forms as $form)
        
            <div id='change_food'>
                <div class='titleicon'>
                    <i class="fa-regular fa-envelope fa-2x"></i><p class='menu_title'>お問い合わせ</p>
                </div>
                <div id='btn'>
                    <form method="get" action="{{ route('api') }}" id="formList">
                        @csrf
                        <input type="hidden" class="id" id="form_id" name="form_id" value="{{ $form->id }}">
                        <input type="hidden" class="id" id="user_id" name="user_id" value="{{ $user->id }}" >
                    </form>
                    @foreach($completes as $complete)
                    @if($complete->form_id == $form->id)
                    <!-- <button name="add" class="comp" comp_num="0">未</button> -->
                    
                    <button name="add" class="comp" comp_num="1">済</button> 
                    
                    <!-- <button name="add" class="comp" comp_num="0">未</button> -->
                    
                    @endif
                    
                    <!-- <button name="add" class="comp" comp_num="0">未</button> -->
                    
                    @endforeach 
                    
                </div>
                <div class='detail'>
                    <p class='detail_p'>名前</p>
                    <p class='detail_p'>{{ $form->name }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>電話番号</p>
                    <p class='detail_p'>{{ $form->tel }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>メールアドレス</p>
                    <p class='detail_p'>{{ $form->mail }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>お問い合わせ内容</p>
                    <p class='detail_p'>{{ $form->body }}</p>
                </div>
                <div class='detail'>
                    <p class='detail_p'>お問い合わせ日時</p>
                    <p class='detail_p'>{{ $form->created_at }}</p>
                </div>
            </div>
            
        @endforeach
        <div class="page">
            {{ $forms->links() }}
        </div>
        <div class="admin">
            <div class="button4">
                <a href="{{ route('menu') }}">メニュー画面に戻る</a>
            </div>    
        </div>
    @endif
    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('/js/chat.js') }}"></script>
</body>
@include('funeral.footer')
