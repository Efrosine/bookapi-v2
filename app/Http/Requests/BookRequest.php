<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookRequest extends FormRequest
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
        if ($this->isMethod('POST')) {
            return [
                'title' => 'required|string|max:255', // Wajib, teks, maksimal 255 karakter
                'author' => 'required|string|max:255', // Wajib, teks, maksimal 255 karakter
                'publisher' => 'required|string|max:255', // Wajib, teks, maksimal 255 karakter
                'overview' => 'required|string', // Wajib, teks
                'read_time' => 'sometimes|string|max:50', // Opsional, teks, maksimal 50 karakter
                'release_date' => 'required|date', // Wajib, format tanggal
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // Wajib, file gambar dengan ukuran maksimal 5MB
            ];
        }
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            return [
                'title' => 'sometimes|string|max:255', // Wajib, teks, maksimal 255 karakter
                'author' => 'sometimes|string|max:255', // Wajib, teks, maksimal 255 karakter
                'publisher' => 'sometimes|string|max:255', // Wajib, teks, maksimal 255 karakter
                'overview' => 'sometimes|string', // Opsional, teks
                'read_time' => 'sometimes|string|max:50', // Opsional, teks, maksimal 50 karakter
                'release_date' => 'sometimes|date', // Wajib, format tanggal
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // Wajib, file gambar dengan ukuran maksimal 5MB
            ];
        }

        return [];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul buku wajib diisi.',
            'author.required' => 'Penulis buku wajib diisi.',
            'publisher.required' => 'Penerbit buku wajib diisi.',
            'release_date.required' => 'Tanggal rilis buku wajib diisi.',
            'release_date.date' => 'Tanggal rilis harus dalam format tanggal yang valid.',
            'image.image' => 'File yang diunggah harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, gif, atau svg.',
            'image.max' => 'Ukuran gambar maksimal adalah 5MB.',
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
