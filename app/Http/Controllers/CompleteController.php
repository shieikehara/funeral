<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Form;
use App\Models\Complete;

class CompleteController extends Controller
{
    public function form_comp() {
        try {
            Complete::insert([
                'user_id' => $_POST['id'],
                'comp_user' => $_GET['id'],
                'created_at' => now()
            ]);
            return response()->json(['test'=>$_POST]);
        } catch (\Throwable $th) {
            return 'アクセスできません。';
        }
    }
}
