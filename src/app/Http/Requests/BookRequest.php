<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'price' => 'required|integer',
            'author' => 'nullable|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '書籍名を入力してください',
            'name.string' => '書籍名は文字列で入力してください',
            'name.max' => '書籍名は50文字以内で入力してください',
            'price.required' => '値段を入力してください',
            'price.integer' => '値段は数値で入力してください'
        ];
    }
}
