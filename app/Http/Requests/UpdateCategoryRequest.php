<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidParentCategory;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'required|string|between:3,191',
            'status' => 'required|numeric',
            'thumbnail' => 'image|mimes:jpg,jpeg,png',
            'parent_id' => ['nullable', 'numeric', new ValidParentCategory],
            'description' => 'required|string|between:10,191',
        ];
    }
}
