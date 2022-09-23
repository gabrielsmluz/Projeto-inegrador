<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=>'required|string|min:2|max:255',
          'email'=>'required|string|unique:users|min:5|max:255',
          'cpf'=>'required|string|min:11|max:255',
          'phone'=>'nullable||min:11|max:255',
          'address'=>'required|string|min:8|max:255',
          'password''required|string|min:8|max:255'

        ];
    }
}
