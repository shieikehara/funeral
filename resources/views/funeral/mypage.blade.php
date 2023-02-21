<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    <p class='p_icon'><i class="fa-solid fa-user mark"></i></p>
    <div class='mypage1'>
        <div class='titleicon'>
            <p class='menu_title'>ユーザー情報</p>
        </div>
        <form action="" method="post" class="loginform" id="formList">
            @csrf
            @foreach($mydate as $m)
            <div class='mypagebox1'>           
                <input type="hidden" name="id" value="{{ $m->id }}" id='id' disabled>
                <input type="text" name="name" value="{{ $m->name }}" class="form" id='name' disabled><br>
                <input type="text" name="email" value="{{ $m->email }}" class="form" id='email' disabled><br>
                <input type="text" name="tel" value="{{ $m->tel }}" class="form" id='tel' disabled><br>
            </div>
        </form>
            <div class='mypagebox2'>
                <div class='edit1'>
                    <button id='editbutton' onclick='dis();'>編集</button>
                </div>
                <div class='edit1'>
                    <button id='e_button' onclick='user_edit();' disabled>編集確定</button> 
                </div>
            </div>
            <button class='delete' onclick='delete_click();' id="delete">退会</button>
    </div>
    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/funeral.js') }}"></script>
    @endforeach
</body>
@include('funeral.footer')