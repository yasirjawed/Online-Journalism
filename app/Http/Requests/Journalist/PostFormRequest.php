<?php

namespace App\Http\Requests\Journalist;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
                'category_id'=>[
                 'required',
                 'integer'
                ],
                'name'=>[
                'required',
                'string'
                ],
                'slug'=>[
                 'required',
                 'string'
                ],
                'description'=>[
                 'required'
                ],
                'yt_iframe'=>[
                 'nullable',
                 'string'
                ],
                'meta_title'=>[
                 'required',
                 'string'
                ],
                'meta_description'=>[
                 'nullable',
                 'string'
                ],
                'active_status'=>[
                    'nullable'
                ],
                'Rejection'=>[
                    'nullable',
                    'string'
                ],
                'meta_keyword'=>[
                 'nullable',
                 'string'
                ],
                'status'=>[
                 'nullable'
                ],
                'rejected'=>[
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
