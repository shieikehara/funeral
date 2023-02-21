<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangeuserRequest extends FormRequest
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
            'login_mail' => 'required',
            'login_password' => 'required',
            'login_tel' => 'required | numeric',
        ];
    }

    public function messages() {
        return [
            'login_mail.required' => 'メールアドレスを入力してください。',
            'login_password.required' => 'パスワードを入力してください。',
            'login_tel.required' => '電話番号を入力してください。',
            'login_tel.numeric' => '電話番号は数字で入力してください',
        ];
    }
}
