<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255',
        ];
    }
}
