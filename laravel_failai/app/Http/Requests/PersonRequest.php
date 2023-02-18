<?php

namespace App\Http\Requests;

use App\Rules\FirstUppercaseRule;
use App\Rules\PersonalCodeRule;
use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:25', new FirstUppercaseRule()],
            'surname' => ['required', 'string', 'min:3', 'max:25'],
            'personal_code' => ['nullable', 'string', new PersonalCodeRule()],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'string'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Privalomas vardas',
            'name.string' => 'Pavadinima turi sudaryti lotyniški simboliai',
            'name.min' => 'Minimalus pavadinimo ilgis privalo būti :min simboliai',
            'name.max' => 'Maximalus pavadinimo ilgis privalo būti :max simboliai',
            // ....
        ];
    }
}
