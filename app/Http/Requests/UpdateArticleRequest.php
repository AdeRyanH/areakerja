<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'judul' => [
                'required',
            ],
            'ringkasan' => [
                'required',
            ],
            'content' => [
                'required',
            ],
            'gambar' => [
                'required',
            ],
        ];
    }
}
