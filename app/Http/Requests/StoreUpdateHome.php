<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\FormatoCpf;

class StoreUpdateHome extends FormRequest
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
            'email' => ['required' ,'min:10', 'max:160', 'email'],
            'telefone' => ['required' ,'min:10', 'max:160'],
            'title_botao' => ['required' ,'min:5', 'max:160'],
            'url_botao' => ['required' ,'min:4', 'max:160'],
        ];
    }
}
