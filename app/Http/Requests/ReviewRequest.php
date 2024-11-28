<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * protected $fillable = ['user_id', 'book_id', 'rating', 'review_text'];
     * 
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
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            return [
                'user_id' => 'sometimes|integer|exists:users,id',
                'book_id' => 'sometimes|integer|exists:books,id',
                'rating' => 'sometimes|integer|min:1|max:5',
                'review_text' => 'sometimes|string'
            ];
        }
        return [
            'user_id' => 'required|integer|exists:users,id',
            'book_id' => 'required|integer|exists:books,id',
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'user_id.required' => 'User ID wajib diisi.',
            'user_id.integer' => 'User ID harus berupa angka.',
            'user_id.exists' => 'User ID tidak ditemukan.',
            'book_id.required' => 'Book ID wajib diisi.',
            'book_id.integer' => 'Book ID harus berupa angka.',
            'book_id.exists' => 'Book ID tidak ditemukan.',
            'rating.required' => 'Rating wajib diisi.',
            'rating.integer' => 'Rating harus berupa angka.',
            'rating.min' => 'Rating minimal 1.',
            'rating.max' => 'Rating maksimal 5.',
            'review_text.required' => 'Review wajib diisi.'
        ];
    }

    /**
     * Handle a failed validation attempt.
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Validation failed',
                'data' => $validator->errors(),
            ], 422)
        );
    }
}
