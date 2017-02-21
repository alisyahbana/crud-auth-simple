<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use Auth;


class CreateOrEditUserRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

     public function authorize()
    {
        if ($this->user()) {
            return true;
        }
        return false;
    }


    public function rules()
    {
        return [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
        ];
    }
}
