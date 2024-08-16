<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSongRequest extends FormRequest
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
            'songName'=> 'required|string',
            'singer'=>'required|string',
            'userRating'=>'required|string',
            'imagePath'=>'required|string',
            'videoId'=>'required|string',
            'songGenre'=>'required|string',
            'releaseDate'=>'required|date',
            'movie_id'=>'required|exists:movies,id'
        ];
    }
}
