<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListYourBusinessRequest extends FormRequest
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
        'venue_name' => [
            'nullable'
        ],
        'country' => [
            'nullable'
        ],
        'state' => [
            'nullable'
        ],
        'city' => [
            'nullable'
        ],
        'address' => [
            'nullable'
        ],
        'max_capacity' => [
            'nullable'
        ],
        'description' => [
            'nullable'
        ],
        'venue_url' => [
            'nullable'
        ],
        'owner_name' => [
            'nullable'
        ],
        'owner_phone' => [
            'nullable'
        ],
        'owner_email' => [
            'nullable'
        ],
        'terms' => [
            'nullable'
        ],
        ];
    }
}
