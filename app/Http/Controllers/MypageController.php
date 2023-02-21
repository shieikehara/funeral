<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\MypageRequest;

class MypageController extends Controller
{
    public function edit_user(MypageRequest $request) {
        try {
            if(isset($_GET['id']) && !is_numeric($_GET['id'])){
                return "不正なパラメータです";
            }
            User::find($_GET['id'])->update([
                'name' => $_GET['name'],
                'email' => $_GET['email'],
                'tel' => $_GET['tel'],
            ]);
            return response()->json(['test'=>$_GET]);
        } catch (\Throwable $th){
            return 'アクセスできません。';
        }
    }
}
