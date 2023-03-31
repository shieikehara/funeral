<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Form;
use App\Models\Complete;

class CompleteController extends Controller
{
    public function form_comp(Request $request) {
        $params = $request->all();
        try {
            if ($params['comp_num'] == 1) {
                Complete::create([
                    'form_id' => $_GET['form_id'],
                    'user_id' => $_GET['user_id'],
                    'created_at' => now()
                ]);    
            }else if ($params['comp_num'] == 0){
                $id = $params['form_id'];
                Complete::where('form_id', $id)->delete();                
            }
            return response()->json(['test'=>$_GET]);
            return compact('params');
        } catch (\Throwable $th) {
            return 'アクセスできません。';
        }
    }

}
?>