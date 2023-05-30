<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required|max:30|unique:types,name',

        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Nome tipologia richiesto',
            'name.max' => 'Lunghezza massima nome della tipologia di 30 caratteri',
            'name.unique' => 'Il nome della tipologia da te inserito esiste gia.'

        ];
    }
}
