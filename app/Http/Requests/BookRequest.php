<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required',
            'pages'=>'required|numeric',
            'price'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Você precisa prencher o campo title',
            'price.required'=>'Você precisa prencher o campo price',
            'pages.required'=>'Você precisa prencher o campo pages',
            'pages.numeric'=>'Apenas número para campo pages'
            
        ];
    }
}
