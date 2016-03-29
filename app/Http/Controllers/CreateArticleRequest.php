<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Http\Requests\CreateClientRequest;

class CreateArticleRequest extends Request
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

           $this->validate($request, [
        'prix' => 'required|numeric',
           'surface' => 'required',
           'type' => 'required',
    ]);
           
            
        ];
    }
}
