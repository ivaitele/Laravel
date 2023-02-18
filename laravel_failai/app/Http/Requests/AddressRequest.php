<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddressRequest extends FormRequest
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
                'type' => ['required', 'string', Rule::in(['billing','shipping'])],
                'country' => ['required', 'string'],
                'state' => ['nullable', 'string'],
                'city' => ['required', 'string'],
                'zip' => ['required', 'string'],
                'street' => ['required', 'string'],
                'house_number' => ['required', 'string'],
                'apartment_number' => ['nullable', 'string'],
                'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
