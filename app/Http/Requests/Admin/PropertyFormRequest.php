<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:8'],
            'description' => ['required', 'min:8'],
            'surface' => ['required', 'integer', 'min:10'],
            'pieces' => ['required', 'integer', 'min:1'],
            'chambres' => ['require', 'integer', 'min:0'],
            'etage' => ['require', 'integer', 'min:0'],
            'prix' => ['require', 'integer', 'min:0'],
            'ville' => ['required', 'min:8'],
            'addresse' => ['required', 'min:8'],
            'code_postal' => ['required', 'min:8'],
            'vendu' => ['required', 'boolean']
        ];
    }
}
