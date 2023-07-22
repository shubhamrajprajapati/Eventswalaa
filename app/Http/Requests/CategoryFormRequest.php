<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            'name' => [
                'required'
            ],
            'slug' => [
                'required'
            ],
            'description' => [
                'nullable'
            ],
            'image' => [
                'nullable'
                // 'mines:jpg,jpeg,png'
            ],
            'meta_title' => [
                'nullable'
            ],
            'meta_keyword' => [
                'nullable'
            ],
            'meta_description' => [
                'nullable'
            ]
        ];
    }
}
