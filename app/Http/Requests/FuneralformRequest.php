<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuneralformRequest extends FormRequest
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
            'mail' => 'required',
            'tel' => 'nullable | numeric',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください。',
            'mail.required' => 'メールアドレスを入力してください。',
            'tel.numeric' => '電話番号は数字で入力してください。',
            'body.required' => '問い合わせ内容を入力してください。',
        ];
    }
}
