<?php

namespace App\Http\Requests;

use App\Enums\OperationEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CalculationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_number' => 'required|numeric',
            'second_number' => 'required|numeric',
            'operation' => ['required', 'string', Rule::enum(OperationEnum::class)],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
