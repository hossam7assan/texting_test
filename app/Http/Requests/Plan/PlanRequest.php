<?php

namespace App\Http\Requests\Plan;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'messages' => 'required|integer|min:0',
            'textwords' => 'required|integer|min:0',
            'rollover' => 'required|boolean',
            'contacts' => 'required|boolean',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'rollover' => $this->rollover == 'on',
            'contacts' => $this->contacts == 'on',
        ]);
    }
}
