<link rel="stylesheet" type="text/css" href="/css/style.css">

@include('funeral.header')
<body>
    <div id='change_food'>
        <div class='titleicon'>
            <i class="fa-solid fa-leaf fa-2x"></i><p class='menu_title'>生花・供物注文</p>
        </div>
        @if(isset($id))
        <form action="complete/flower" method="post" class="loginform">
            @csrf
            <div class='flowerbox'>
                <div class='flower_img'>
                    <div class='img'>image</div>
                </div>
                <input type="text" name="nameplate" placeholder="花札名" class="form"><br>
            </div>
            @if ($errors->has('nameplate'))
                <li class='error'>{{$errors->first('nameplate')}}</li>
            @endif            
            <div class='flower_order'>
                <select name="flower" class="new_form">
                    <optgroup label="生花・供物種類">                
                        <option value='1.5万 生花籠'>1.5万 生花籠</option>
                        <option value='2万 生花籠'>2万 生花籠</option>
                        <option value='2.5万 生花籠'>2.5万 生花籠</option>
                        <option value='缶詰籠'>缶詰籠</option>
                        <option value='1.5万 樒籠'>1.5万 樒籠</option>
                    </optgroup>
                </select><br>
                <input type="text" name="volume" placeholder="数量" class="flower_form"><br>
            </div>
            @if ($errors->has('volume'))
                <li class='error'>{{$errors->first('volume')}}</li>
            @endif
            <select name="funeral_id" class="new_form">
                <optgroup label="葬家選択">
                    @foreach ($f_funeral as $ff)
                        <option value="{{ $ff->id }}">{{ $ff->family_name }}</option> 
                    @endforeach
                </optgroup>
            </select><br>
            <p class='order_p'>注文者情報</p>
                    @foreach ($f_user as $f)
                        <input type="hidden" name="id" value="{{ $f->id }}">
                        <input type="text" name="name" placeholder="注文者名前" value="{{ $f->name }}" class="form" readonly><br>
                        <input type="text" name="tel" placeholder="注文者電話番号" value="{{ $f->tel }}" class="form" readonly><br>
                    @endforeach
                    <input type="submit" name="flower_order" value="注文" class="login_button">
                @endif
                @if (!isset($id))
                <form action="{{ route('flower_guest') }}" method="post" class="loginform">
            @csrf
            <div class='flowerbox'>
                <div class='flower_img'>
                    <div class='img'>image</div>
                </div>
                <input type="text" name="nameplate" placeholder="花札名" class="form"><br>
            </div>
            @if ($errors->has('nameplate'))
                <li class='error'>{{$errors->first('nameplate')}}</li>
            @endif            
            <div class='flower_order'>
                <select name="flower" class="new_form">
                    <optgroup label="生花・供物種類">                
                        <option value='1.5万 生花籠'>1.5万 生花籠</option>
                        <option value='2万 生花籠'>2万 生花籠</option>
                        <option value='2.5万 生花籠'>2.5万 生花籠</option>
                        <option value='缶詰籠'>缶詰籠</option>
                        <option value='1.5万 樒籠'>1.5万 樒籠</option>
                    </optgroup>
                </select><br>
                <input type="text" name="volume" placeholder="数量" class="flower_form"><br>
            </div>
            @if ($errors->has('volume'))
                <li class='error'>{{$errors->first('volume')}}</li>
            @endif
            <select name="funeral_id" class="new_form">
                <optgroup label="葬家選択">
                    @foreach ($f_funeral as $ff)
                        <option value="{{ $ff->id }}">{{ $ff->family_name }}</option> 
                    @endforeach
                </optgroup>
            </select><br>
            <p class='order_p'>注文者情報</p>
                    <input type="text" name="name" placeholder="注文者名前" class="form"><br>
                    @if ($errors->has('name'))
                        <li class='error'>{{$errors->first('name')}}</li>
                    @endif
                    <input type="text" name="tel" placeholder="注文者電話番号" class="form"><br>
                    @if ($errors->has('tel'))
                        <li class='error'>{{$errors->first('tel')}}</li>
                    @endif
                    <input type="submit" name="flower_order" value="注文" class="login_button">
                @endif
        </form>
    </div>

    <script src="https://kit.fontawesome.com/b3dcb0dac9.js" crossorigin="anonymous"></script>
</body>
@include('funeral.footer')
