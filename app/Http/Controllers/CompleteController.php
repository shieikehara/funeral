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
        try {
            $comps = Complete::insert([
                'user_id' => 1,
                'comp_user' => 1,
                'created_at' => now()
            ]);

            // $id = $comps->id;
            // if (isset($id)) {
                // Complete::destroy($id);
            // }
            return response()->json(['test'=>$_POST]);
        } catch (\Throwable $th) {
            return 'アクセスできません。';
        }
    }
}
?>