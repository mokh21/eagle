<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRdvRequest extends Request
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
        return ['id_client' => 'unique:rdv|required',
            'nom_client' => 'required',
            'email_client' => 'unique:rdv|required',
            'num_client' => 'unique:rdv|required',
            'date_rdv' => 'unique:rdv|required',
            'heure_rdv' => 'unique:rdv|required'
        ];
    }
}
