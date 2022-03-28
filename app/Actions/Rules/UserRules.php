<?php

namespace App\Actions\Rules;

class UserRules
{
    public static function StoreRules() {
        return [
            'name' => 'required',
            'document' => 'required|min:11',
            'birthday' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public static function UpdateRules() {
        return [
            'name' => 'sometimes',
            'document' => 'sometimes|min:11',
            'birthday' => 'sometimes',
            'email' => 'sometimes|email|unique:users',
            'phone' => 'sometimes',
            'street' => 'sometimes',
            'city' => 'sometimes',
            'state' => 'sometimes',
        ];
    }
}
