<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'movieId' => 'required|string',
            'movieName' => 'required|string',
            'year' => 'required|string',
            'genre' => 'required|string',
            'director' => 'required|string',
            'cast' => 'required|string',
            'overview' => 'required|string',
            'imagepath' => 'required|string'
        ];
    }
}
