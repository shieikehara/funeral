<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewfuneralRequest extends FormRequest
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
            'family_name' => 'required',
            'deceased' => 'required',
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'family_name.required' => '葬家名を入力してください。',
            'deceased.required' => '故人名を入力してください。',
            'name.required' => '喪主名を入力してください。',
        ];
    }
}
