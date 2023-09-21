<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if(request()->isMethod('post')){
            return
            [
                'name' => 'required|string|max:200',
                'email' => 'required|string',
                'password' => 'required|string'
            ];
        }else{
            return
            [
                'name' => 'required|string|max:200',
                'email' => 'required|string',
                'password' => 'required|string'
            ];
        }
    }
    public function message() {
        if(request()->isMethod('post')){
            return
            [
                'name.required' => 'ce champ ne peut pas etre vide',
                'email.required' => 'ce champ ne peut pas etre vide',
                'password.required' => 'ce champ ne peut pas etre vide'
            ];
        }else{
            return
            [
                'name.required' => 'ce champ ne peut pas etre vide',
                'email.required' => 'ce champ ne peut pas etre vide',
                'password.required' => 'ce champ ne peut pas etre vide'
            ];
        }
    }
}
