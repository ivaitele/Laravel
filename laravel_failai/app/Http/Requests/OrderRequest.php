<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_id' => ['required', 'exists:users,id'],
            'shipping_address_id' => ['required', 'exists:addresses,id'],
            'billing_address_id' => ['required', 'exists:addresses,id'],
            'status_id' => ['required', 'exists:statuses,id'],
        ];
    }
}
