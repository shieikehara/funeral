<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewloginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required | numeric',
            'password' => 'required',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => '名前を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'tel.required' => '電話番号を入力してください。',
            'tel.numeric' => '電話番号は整数で入力してください。',
            'password.required' => 'パスワードを入力してください。',
        ];
    }
}
