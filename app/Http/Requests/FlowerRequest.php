<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlowerRequest extends FormRequest
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
            'nameplate' => 'required',
            'volume' => 'required | numeric',
            'name' => 'required',
            'tel' => 'required | numeric',
        ];
    }

    public function messages() 
    {
        return [
            'nameplate.required' => '花札名を入力してください。',
            'volume.required' => '個数を入力してください。',
            'volume.numeric' => '個数は数字で入力してください。',
            'name.required' => 'ご注文者名を入力してください。',
            'tel.required' => '電話番号を入力してください。',
            'tel.numeric' => '電話番号は数字で入力してください。',
        ];
    }
}
