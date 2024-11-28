<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LendingRequest extends FormRequest
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
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            return [
                'user_id' => 'sometimes|integer|exists:users,id',
                'book_id' => 'sometimes|integer|exists:books,id',
                'lent_at' => 'sometimes|date',
                'return_at' => 'sometimes|date',
                'notes' => 'sometimes|string'
            ];
        }
        return [
            'user_id' => 'required|integer|exists:users,id',
            'book_id' => 'required|integer|exists:books,id',
            'lent_at' => 'required|date',
            'return_at' => 'sometimes|date',
            'notes' => 'sometimes|string'
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
            'lent_at.required' => 'Tanggal peminjaman wajib diisi.',
            'lent_at.date' => 'Tanggal peminjaman harus berupa tanggal.',
            'return_at.date' => 'Tanggal pengembalian harus berupa tanggal.',
            'notes.string' => 'Notes harus berupa string.'
        ];
    }
}
