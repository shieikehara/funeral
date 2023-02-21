<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    <div id='change_food'>
        <div class='titleicon'>
            <i class="fa-solid fa-desktop fa-2x"></i><p class='menu_title'>葬儀詳細登録</p>
        </div>
        <form action="complete/new_funeral" method="post" class="loginform">
            @csrf
            <input type="text" name="family_name" placeholder="葬家名" class="form"><br>
            @if ($errors->has('family_name'))
                <li class='error'>{{$errors->first('family_name')}}</li>
            @endif
            <input type="text" name="deceased" placeholder="故人名" class="form"><br>
            @if ($errors->has('deceased'))
                <li class='error'>{{$errors->first('deceased')}}</li>
            @endif
            <input type="text" name="name" placeholder="喪主名" class="form"><br>
            @if ($errors->has('name'))
                <li class='error'>{{$errors->first('name')}}</li>
            @endif
            <input type="text" name="day1" placeholder="通夜日時" class="form"><br>
            <input type="text" name="day2" placeholder="葬儀日時" class="form"><br>
            <input type="text" name="dinner" placeholder="通夜料理数" class="form"><br>
            <input type="text" name="lunch" placeholder="忌中料理数" class="form"><br>
            <select name="funeral_style" class="new_form">
                <optgroup label="葬儀形式">                
                    <option value='2日間仏式'>2日間仏式</option>
                    <option value='1日葬仏式'>1日葬仏式</option>
                    <option value='火葬式お別れ有'>火葬式お別れ有</option>
                    <option value='火葬式お別れ無し'>火葬式お別れ無し</option>
                    <option value='その他'>その他</option>
                </optgroup>
            </select><br>
            <input type="submit" name="registration" value="登録" class="login_button">
        </form>
    </div>

    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
</body>
@include('funeral.footer')

