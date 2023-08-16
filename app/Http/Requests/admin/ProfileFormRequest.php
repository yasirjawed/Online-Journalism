<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

            $rules = [
                'Biography'=>[
                    'nullable'
                ],
                'Mission'=>[
                    'nullable'
                ],
                'Now'=>[
                    'nullable'
                ],
                'image'=>[
                    'nullable',
                    'mimes:jpeg,jpg,png'
                   ]
            ];

            return $rules;

    }
}
