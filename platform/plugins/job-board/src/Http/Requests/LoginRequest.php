<?php

namespace Botble\JobBoard\Http\Requests;

use Botble\Support\Http\Requests\Request;

class LoginRequest extends Request
{
    public function rules(): array
    {
        return [
            '_token' => 'required',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }
}
