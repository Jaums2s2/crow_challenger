<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
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
            'nome'=>'required',
            'cep' =>'required|numeric',
            'cidade' => 'required',
            'uf'=> 'required',
            'numero' => 'required|numeric',
            'cidade' => 'required',
            'resumo' => 'required',
            'telefone' => 'numeric',
            'celular'  => 'numeric',
        ];
    }

    public function messages()
    {
        return [
            'nome'=>'O campo Nome é Obrigatorio',
            'cep.numeric' =>'O Cep devem ser Numeros',
            'cep.required' =>'O Campo Cep é Obrigatorio',
            'uf.required' =>'O Campo UF é Obrigatorio',
            'numero.required' =>'O Campo numero é Obrigatorio',
            'numero.numeric' =>'O numero devem ser Numeros',
            'cidade.required' =>'O Campo numero é Obrigatorio',
            'resumo.required' =>'O Campo resumo é Obrigatorio',
            'celular.numeric' =>'O numero devem ser Numeros',
            'telefone.numeric' =>'O numero devem ser Numeros',
        ];
    }
    
}
