<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewUserRequest extends FormRequest
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
           
         'first_name'=>'required|max:15|min:5',
         'last_name'=>'required|min:5|max:15',
         'email'=>'required|unique:users,email',
         'password'=>'required|min:3',
         'confirm_password'=>'required|min:3'      
        ];
    }
}
