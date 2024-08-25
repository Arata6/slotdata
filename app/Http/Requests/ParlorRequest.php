<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class parlorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'parlor.name' => 'required|string|max:100',
            'parlor.businessHours' => 'required|string|max:100',
            'parlor.lottery' => 'required|string|max:100',
            'parlor.adress' => 'required|string|max:100',
            'parlor.lotteryTime' => 'required|string|max:100',
            'parlor.machine' => 'required|string|max:100',
            'parlor.exchange' => 'required|string|max:100',
            'parlor.recomendation' => 'required|string|max:10',
        ];
    }
}
