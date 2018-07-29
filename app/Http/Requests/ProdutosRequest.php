<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'descricao' => 'required|max:255',
            'tamanho'	=> 'required|string',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
            'required' => 'O campo :attribute deve ser preenchido.',
            'min'   => 'O campo :attribute deve ter no mínimo :min caractéres.',
            'max'   => 'O campo :attribute deve ter no máximo :max caractéres.'
        ];
    }
}
