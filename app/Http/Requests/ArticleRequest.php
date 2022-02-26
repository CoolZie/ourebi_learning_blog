<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'auteur' => 'required',
            'contenu' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>"Le titre est obligatoire",
            'auteur.required'=>"L'auteur est obligatoire",
            'contenu.required'=>"Le contenu est obligatoire"
        ];
    }
}
