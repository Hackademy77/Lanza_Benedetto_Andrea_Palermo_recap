<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        return [
            'brand' => 'required|min:3|max:255',
            'model' => 'required|min:3|max:255',
            'year' => 'required|numeric|min:1895',
            'km' => 'required|numeric',
            'price' => 'required|numeric',
            'img' => 'required',

        ];
    }
}
