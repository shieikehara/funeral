<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Form;
use App\Models\Funeral;
use App\Models\Good;
use App\Models\User;
use App\Models\U_flower;
use App\Http\Requests\ChangepassRequest;
use App\Http\Requests\ChangeuserRequest;
use App\Http\Requests\FlowerRequest;
use App\Http\Requests\FuneralformRequest;
use App\Http\Requests\NewfuneralRequest;
use App\Http\Requests\NewloginRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class FuneralController extends Controller
{
    public function index() {
        return view('funeral.index');
    }

    public function guestMenu() {
        return view('funeral.menu');
    }

    public function menu() {
        if(isset($_GET['id']) && !is_numeric($_GET['id'])){
            return "不正なパラメータです";
        }
        // 現在認証しているユーザーを取得
        $user = Auth::user();

        // 現在認証しているユーザーのIDを取得
        $id = Auth::id();
        return view('funeral.menu',compact('user','id'));
    }

    public function new_login() {
        try {
            $users = Funeral::all();
            return view('funeral.new_login',compact('users'));
        } catch (\Throwable $th) {
            return 'アクセスできません。';
        }
        ;
    }

    public function new_login_complete(NewloginRequest $request) {
        try{
            User::create(array_merge($request->all(),
                ['password' => Hash::make($request->password)]
            ));
            return view('funeral.new_login_complete');
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function change_pass() {
        return view('funeral.change_pass');
    }

    public function complete1(FlowerRequest $request) {
        try {
            $id = Auth::id();
            $sample = Flower::create($request->all());
            $f_id = $sample->id;
            $users = User::find($_POST['id']);
            U_flower::insert([
                'user_id' => $users->id,
                'flower_id' => $f_id,
                'created_at' => now()
            ]);
    
            return view('funeral.complete', compact('id', 'f_id', 'users'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function complete2(FuneralformRequest $request) {
        try {
            $id = Auth::id();
            Form::create($request->all());
            return view('funeral.complete', compact('id'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function complete3(NewfuneralRequest $request) {
        try {
            $id = Auth::id();
            Funeral::create($request->all());
            return view('funeral.complete', compact('id'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function complete4(Request $request) {
        try{
            $id = Auth::id();
            $detail = Funeral::find($request->input('id'));
            $detail->update([
                'dinner' => $request->input('change_day1'),
                'lunch' => $request->input('change_day2'),
            ]);
            return view('funeral.complete', compact('id'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function complete5(FlowerRequest $request) {
        try {
            $sample = Flower::create($request->all());
            return view('funeral.complete');
        } catch (\Throwable $th) {
            return 'アクセスできません。';
        }
    }

    public function change_complete(ChangepassRequest $request) {
        try {
            $user = User::where('email', $request->input('email'))->first();
            //パスワード変更処理
            $user->fill([
                'password' => Hash::make($request->input('password'))
            ])->save();
            return view('funeral.change_complete', compact('user'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    } 

    public function change_complete2(ChangeuserRequest $request) {
        return view('funeral.change_complete');
    }

    public function mypage() {
        try {
            if(isset($_GET['id']) && !is_numeric($_GET['id'])){
                return "不正なパラメータです";
            }
            $mydate = User::find($_GET);
            $user = Auth::user();
            $id = Auth::id();
            return view('funeral.mypage', compact('mydate', 'user', 'id'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function change_user() {
        return view('funeral.change_user');
    }

    public function funeral() {
        try {
            if(isset($_GET['id']) && !is_numeric($_GET['id'])){
                return "不正なパラメータです";
            }
            $user = Auth::user();
            $id = Auth::id();
            $details = Funeral::find($_GET);
            $all_details = Funeral::all();
            return view('funeral.funeral', compact('details', 'user', 'id', 'all_details'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function change_food() {
        try {
            if(isset($_GET['id']) && !is_numeric($_GET['id'])){
                return "不正なパラメータです";
            }
            $user = Auth::user();
            $id = Auth::id();
            $detail = Funeral::find($_GET);
            $f_funeral = Funeral::all();
            return view('funeral.change_food', compact('detail', 'user', 'id', 'f_funeral'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function flower(){
        try {
            $user = Auth::user();
            $id = Auth::id();
            $f_user = User::find($_GET);
            $f_funeral = Funeral::all();
            return view('funeral.flower', compact('f_user', 'user', 'id', 'f_funeral'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function form(Request $request) {
        try {
            $user = Auth::user();
            $id = Auth::id();
            $sort = $request->sort;
            $forms = Form::orderBy('id', 'desc')->paginate(5);
            return view('funeral.form', compact('user', 'id', 'forms', 'sort'));
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function new_funeral() {
        try {
            if(isset($_GET['id']) && !is_numeric($_GET['id'])){
                return "不正なパラメータです";
            }
            $user = Auth::user();
            $id = Auth::id();
            return view('funeral.new_funeral', compact('user', 'id') );
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }

    public function delete_user() {
        try {
            User::destroy($_GET);
            return view('funeral.index');
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }
}
?>