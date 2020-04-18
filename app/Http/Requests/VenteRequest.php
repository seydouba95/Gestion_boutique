<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VenteRequest extends FormRequest
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
            'nom' => 'bail|required',
            'prixUnitaire' => 'bail|required|numeric',
            'prixVente' => 'bail|required|numeric',
            'stock' => 'bail|required|numeric',



            
        ];
    }
  
}