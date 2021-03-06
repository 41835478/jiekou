<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;


class MyRegisterRequest extends BaseRequest
{

    public $key = 'register';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ];
        if (config('g9zz.invite_code.is_invite')) {
            $rule['inviteCode'] = 'required|exists:invite_code,code,status,created';
        }

        return $rule;
    }
}
